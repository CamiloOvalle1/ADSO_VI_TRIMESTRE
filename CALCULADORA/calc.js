class Calculadora {
    constructor(elementoOperador1, elementoOperador2) {
        this.elementoOperador1 = elementoOperador1;
        this.elementoOperador2 = elementoOperador2;
        this.limpiar();
    }

    limpiar() {
        this.operador1 = 0;
        this.operador2 = 0;
        this.operacion = '';
        this.actualizarUsuario();
    }

    actualizarUsuario() {
        this.elementoOperador1.textContent = this.operador1 + this.operacion;
        this.elementoOperador2.textContent = this.operador2;
    }

    agregarNumero(numero) {
        if (numero === "." && this.operador2.includes('.')) return;
        this.operador2 = this.operador2 === 0 ? numero : this.operador2.toString() + numero;
        this.actualizarUsuario();
    }

    borrar() {
        if (this.operador2 === 0) return;
        this.operador2 = +this.operador2.toString().slice(0, -1);
        this.actualizarUsuario();
    }

    operaciones(operacion) {
        if (this.operacion) {
            this.calcular();
        }
        this.operacion = operacion;
        this.operador1 = +this.operador2 === 0 ? this.operador1 : this.operador2;
        this.operador2 = 0;
        this.actualizarUsuario();
    }

    calcular() {
        switch (this.operacion) {
            case "+":
                this.operador1 = +this.operador1 + +this.operador2;
                break;
            case "-":
                this.operador1 = +this.operador1 - +this.operador2;
                break;
            case "*":
                this.operador1 = +this.operador1 * +this.operador2;
                break;
            case "/":
                this.operador1 = +this.operador1 / +this.operador2;
                break;
        }
        this.operacion = "";
        this.operador2 = 0;
        this.actualizarUsuario();
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const elementoOperador1 = document.getElementById("operador1")
    const elementoOperador2 = document.getElementById("operador2")
    const botonLimpiar = document.getElementById("limpiar")
    const botonesNumero = document.querySelectorAll(".numero")
    const botonBorrar = document.getElementById("borrar")
    const botonesOperacion = document.querySelectorAll(".operacion")
    const botonIgual = document.getElementById("igual")

    const calculadora = new Calculadora(elementoOperador1, elementoOperador2);

    botonLimpiar.addEventListener("click", () => {
        calculadora.limpiar();
    });

    botonesNumero.forEach(boton => {
        boton.addEventListener('click', () => {
            calculadora.agregarNumero(boton.textContent);
        });
    });

    botonBorrar.addEventListener('click', () => {
        calculadora.borrar();
    });

    botonesOperacion.forEach(boton => {
        boton.addEventListener("click", () => {
            calculadora.operaciones(boton.textContent);
        });
    });

    botonIgual.addEventListener('click', () => {
        calculadora.calcular();
    });
});

