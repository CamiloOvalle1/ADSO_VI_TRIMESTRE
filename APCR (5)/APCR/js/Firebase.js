class FirebaseUser {

  /**this the method constructor*/
  constructor(idTbody) {
    this.objTbody = document.getElementById(idTbody);
    this.URL = "https://api-apcr-default-rtdb.firebaseio.com/api/users";
  }

  /**this the method for get data users*/
  async getDataUsers() {
    return fetch(this.URL + ".json")
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        this.setTableUser(data);
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }

  /**This is the method async to get user data by id
   * @param id user
  */
  async getDataUser(id) {
    return fetch(this.URL + "/" + id + ".json")
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        return data;
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }
  /**This is the method to create the table rows using a users Json format
   * @param json user
  */
  setTableUser(data) {
    let contDiv = 1;
    let DivTable = "";
    let btnActions = "";
    for (const user in data) {
      let getId = "'" + user + "'";
      btnActions = '<div class="btn-group " role="group" aria-label="Basic mixed styles example">' +
        '<button type="button" onclick="editUser(' + getId + ')" class="btn "><img class="img" src="./img/car.svg"></button>' +
        '</div>';
      DivTable += "<div class='flex-item'>"+ btnActions +"P-"+data[user].id +  "</div>";
      
      contDiv++;
    }
    this.objTbody.innerHTML = DivTable;
    
  }
  

  /**This is the method to create the new data item in user Json format
  * @param json user
  */
  async setCreateUser(data) {
    return fetch(this.URL + ".json", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        this.getDataUsers();
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }
  /**This is the method to update the element by sending a set of data in Json format from the user
  * @param json user
  @param id user
  */
  async setUpdateUser(id, data) {
    return fetch(this.URL + "/" + id + ".json", {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        this.getDataUsers();
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }
  /**This is the method to delete the element
  @param id user
  */
  async setDeleteUser(id) {
    return fetch(this.URL + "/" + id + ".json", {
      method: 'DELETE'
    })
      .then((res) => {
        if (!res.ok) {
          console.log('Result: Problem');
          return;
        }
        return res.json();
      })
      .then((data) => {
        return data;
      })
      .catch((error) => {
        console.error(error);
      })
      .finally();
  }
}