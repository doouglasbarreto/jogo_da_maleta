var inicio = 0
var valores = { 1: 0.25, 2: 0.50, 3: 1, 4: 5, 5: 10, 6: 25, 7: 50, 8: 75, 9: 100, 10: 200, 11: 300, 12: 400, 13: 500, 14: 750, 15: 1000, 16: 2000, 17: 5000, 18: 10000, 19: 15000, 20: 20000, 21: 25000, 22: 50000, 23: 75000, 24: 100000, 25: 200000, 26: 300000, 27: 400000, 28: 500000, 29: 750000, 30: 1000000 }
var valoresString = { 1: "0,25", 2: "0,50", 3: "1", 4: "5", 5: "10", 6: "25", 7: "50", 8: "75", 9: "100", 10: "200", 11: "300", 12: "400", 13: "500", 14: "750", 15: "1.000", 16: "2.000", 17: "5.000", 18: "10.000", 19: "15.000", 20: "20.000", 21: "25.000", 22: "50.000", 23: "75.000", 24: "100.000", 25: "200.000", 26: "300.000", 27: "400.000", 28: "500.000", 29: "750.000", 30: "1.000.000" }
var valorex = {}
var valorexAb = { 1: null, 2: null, 3: null, 4: null, 5: null, 6: null, 7: null, 8: null, 9: null, 10: null, 11: null, 12: null, 13: null, 14: null, 15: null, 16: null, 17: null, 18: null, 19: null, 20: null, 21: null, 22: null, 23: null, 24: null, 25: null, 26: null, 27: null, 28: null, 29: null, 30: null }
window.alert('Você tem que escolher uma maleta para você guardar')


var contadorDeAbertura = 0
var maletaValor = {}
var certinho = 1

while (certinho < 31) {
    var cont = Math.floor(Math.random() * 30 + 1)
    if (maletaValor[cont] == undefined) {
        var escolheM = Math.floor(Math.random() * 30 + 1)
        if (valoresString[escolheM] != null) {
            maletaValor[cont] = valoresString[escolheM]
            valorex[cont] = valores[escolheM]
            valoresString[escolheM] = null
            certinho++
        }
    }
}

var bnm

for (var a = 1; a <= 30; a++) {
    console.log("maleta " + a + " = " + maletaValor[a])
}
function jogar(num) {
    if (inicio == 1) {


        var estilo = document.getElementById(num)
        if (document.getElementById("p" + num) != null) {
            if (valorex[num] != null) {
                if (valorex[num] != -1) {
                    estilo.style.backgroundImage = 'url(789.png)'
                    estilo.style.color = '#505050'
                    valorex[num] = null
                    valorexAb[num] = 1
                    var c = "----- MALETA ABERTA -----\n\nVocê abriu uma maleta com \n\nR$ " + maletaValor[num] + "\n\n"
                    console.log("Testeeee c")
                    for (var ty = 1; ty < 31; ty++) {
                        bnm = "R$ " + maletaValor[num]
                        bzm = document.getElementById(`i${ty}`).textContent

                        if (bzm == bnm) {
                            document.getElementById(`i${ty}`).style.backgroundColor = 'darkgray'
                        }
                    }
                    contadorDeAbertura++
                    window.alert(c)
                    var estiloo
                    if (contadorDeAbertura == 6) {
                        var primeiraOf = 0
                        for (var prf = 1; prf < 31; prf++) {
                            if (valorex[prf] != null) {
                                primeiraOf += valorex[prf]
                            }

                        }
                        primeiraOf = (primeiraOf * 0.15)
                        primeiraOf = primeiraOf.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
                        var resultado = window.confirm("!--!--!--! OFERTA !--!--!--!\n\n\nVocê aceita \n\nR$ " + primeiraOf + " \n\npara desistir?\n!--!--!--!  !--!--!--!  !--!--!--!\n\n")
                        if (resultado == true) {
                            window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + primeiraOf + "\n\n")
                            document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> ${primeiraOf}` 
                            document.getElementById('resulfinal').style.visibility = "visible"
                            document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                            var verfh = document.getElementById('sSel').textContent
                            document.getElementById('sSel').innerHTML = `R$ ${maletaValor[verfh]}`
                            document.getElementById('sSel').style.color = "green"
                            for (var tyy = 1; tyy < 31; tyy++) {
                                estiloo = document.getElementById(tyy)
                                estiloo.style.backgroundImage = 'url(789.png)'
                                estiloo.style.color = '#505050'
                                valorex[tyy] = -1


                            }

                        }
                    }
                    else if (contadorDeAbertura == 12) {
                        var primeiraOf = 0
                        for (var prf = 1; prf < 31; prf++) {
                            if (valorex[prf] != null) {
                                primeiraOf += valorex[prf]
                            }

                        }
                        primeiraOf = (primeiraOf * 0.18)
                        primeiraOf = primeiraOf.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
                        var resultado = window.confirm("Você aceita \n\nR$ " + primeiraOf + " \n\npara desistir?\n\n")
                        if (resultado == true) {
                            window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + primeiraOf + "\n\n")
                            document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> ${primeiraOf}` 
                            document.getElementById('resulfinal').style.visibility = "visible"
                            document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                            var verfh = document.getElementById('sSel').textContent
                            document.getElementById('sSel').innerHTML = `R$ ${maletaValor[verfh]}`
                            document.getElementById('sSel').style.color = "green"
                            for (var tyy = 1; tyy < 31; tyy++) {
                                estiloo = document.getElementById(tyy)
                                estiloo.style.backgroundImage = 'url(789.png)'
                                estiloo.style.color = '#505050'
                                valorex[tyy] = -1
                            }

                        }
                    }
                    else if (contadorDeAbertura == 17) {
                        var primeiraOf = 0
                        for (var prf = 1; prf < 31; prf++) {
                            if (valorex[prf] != null) {
                                primeiraOf += valorex[prf]
                            }

                        }
                        primeiraOf = (primeiraOf * 0.2)
                        primeiraOf = primeiraOf.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
                        var resultado = window.confirm("Você aceita \n\nR$ " + primeiraOf + " \n\npara desistir?\n\n")
                        if (resultado == true) {
                            window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + primeiraOf + "\n\n")
                            document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> ${primeiraOf}` 
                            document.getElementById('resulfinal').style.visibility = "visible"
                            document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                            var verfh = document.getElementById('sSel').textContent
                            document.getElementById('sSel').innerHTML = `R$ ${maletaValor[verfh]}`
                            document.getElementById('sSel').style.color = "green"
                            for (var tyy = 1; tyy < 31; tyy++) {
                                estiloo = document.getElementById(tyy)
                                estiloo.style.backgroundImage = 'url(789.png)'
                                estiloo.style.color = '#505050'
                                valorex[tyy] = -1
                            }

                        }
                    }
                    else if (contadorDeAbertura == 21) {
                        var primeiraOf = 0
                        for (var prf = 1; prf < 31; prf++) {
                            if (valorex[prf] != null) {
                                primeiraOf += valorex[prf]
                            }

                        }
                        primeiraOf = (primeiraOf * 0.21)
                        primeiraOf = primeiraOf.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
                        var resultado = window.confirm("Você aceita \n\nR$ " + primeiraOf + " \n\npara desistir?\n\n")
                        if (resultado == true) {
                            window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + primeiraOf + "\n\n")
                            document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> ${primeiraOf}` 
                            document.getElementById('resulfinal').style.visibility = "visible"
                            document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                            var verfh = document.getElementById('sSel').textContent
                            document.getElementById('sSel').innerHTML = `R$ ${maletaValor[verfh]}`
                            document.getElementById('sSel').style.color = "green"
                            for (var tyy = 1; tyy < 31; tyy++) {
                                estiloo = document.getElementById(tyy)
                                estiloo.style.backgroundImage = 'url(789.png)'
                                estiloo.style.color = '#505050'
                                valorex[tyy] = -1
                            }

                        }
                    }
                    else if (contadorDeAbertura == 24) {
                        var primeiraOf = 0
                        for (var prf = 1; prf < 31; prf++) {
                            if (valorex[prf] != null) {
                                primeiraOf += valorex[prf]
                            }

                        }
                        primeiraOf = (primeiraOf * 0.24)
                        primeiraOf = primeiraOf.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
                        var resultado = window.confirm("Você aceita \n\nR$ " + primeiraOf + " \n\npara desistir?\n\n")
                        if (resultado == true) {
                            window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + primeiraOf + "\n\n")
                            document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> ${primeiraOf}` 
                            document.getElementById('resulfinal').style.visibility = "visible"
                            document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                            var verfh = document.getElementById('sSel').textContent
                            document.getElementById('sSel').innerHTML = `R$ ${maletaValor[verfh]}`
                            document.getElementById('sSel').style.color = "green"
                            for (var tyy = 1; tyy < 31; tyy++) {
                                estiloo = document.getElementById(tyy)
                                estiloo.style.backgroundImage = 'url(789.png)'
                                estiloo.style.color = '#505050'
                                valorex[tyy] = -1
                            }

                        }
                    }
                    else if (contadorDeAbertura == 26) {
                        var primeiraOf = 0
                        for (var prf = 1; prf < 31; prf++) {
                            if (valorex[prf] != null) {
                                primeiraOf += valorex[prf]
                            }

                        }
                        primeiraOf = (primeiraOf * 0.31)
                        primeiraOf = primeiraOf.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
                        var resultado = window.confirm("Você aceita \n\nR$ " + primeiraOf + " \n\npara desistir?\n\n")
                        if (resultado == true) {
                            window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + primeiraOf + "\n\n")
                            document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> ${primeiraOf}` 
                            document.getElementById('resulfinal').style.visibility = "visible"
                            document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                            var verfh = document.getElementById('sSel').textContent
                            document.getElementById('sSel').innerHTML = `R$ ${maletaValor[verfh]}`
                            document.getElementById('sSel').style.color = "green"
                            for (var tyy = 1; tyy < 31; tyy++) {
                                estiloo = document.getElementById(tyy)
                                estiloo.style.backgroundImage = 'url(789.png)'
                                estiloo.style.color = '#505050'
                                valorex[tyy] = -1
                            }

                        }
                    }
                    else if (contadorDeAbertura == 27) {
                        var primeiraOf = 0
                        for (var prf = 1; prf < 31; prf++) {
                            if (valorex[prf] != null) {
                                primeiraOf += valorex[prf]
                            }

                        }
                        primeiraOf = (primeiraOf * 0.38)
                        primeiraOf = primeiraOf.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
                        var resultado = window.confirm("Você aceita \n\nR$ " + primeiraOf + " \n\npara desistir?\n\n")
                        if (resultado == true) {
                            window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + primeiraOf + "\n\n")
                            document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> ${primeiraOf}` 
                            document.getElementById('resulfinal').style.visibility = "visible"
                            document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                            var verfh = document.getElementById('sSel').textContent
                            document.getElementById('sSel').innerHTML = `R$ ${maletaValor[verfh]}`
                            document.getElementById('sSel').style.color = "green"
                            for (var tyy = 1; tyy < 31; tyy++) {
                                estiloo = document.getElementById(tyy)
                                estiloo.style.backgroundImage = 'url(789.png)'
                                estiloo.style.color = '#505050'
                                valorex[tyy] = -1
                            }

                        }
                    }
                    else if (contadorDeAbertura == 28) {
                        var primeiraOf = 0
                        for (var prf = 1; prf < 31; prf++) {
                            if (valorex[prf] != null) {
                                primeiraOf += valorex[prf]
                            }

                        }
                        primeiraOf = (primeiraOf * 0.51)
                        primeiraOf = primeiraOf.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })
                        var resultado = window.confirm("Você aceita \n\nR$ " + primeiraOf + " \n\npara desistir?\n\n")
                        if (resultado == true) {
                            window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + primeiraOf + "\n\n")
                            document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> ${primeiraOf}` 
                            document.getElementById('resulfinal').style.visibility = "visible"
                            document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                            var verfh = document.getElementById('sSel').textContent
                            document.getElementById('sSel').innerHTML = `R$ ${maletaValor[verfh]}`
                            document.getElementById('sSel').style.color = "green"
                            for (var tyy = 1; tyy < 31; tyy++) {
                                estiloo = document.getElementById(tyy)
                                estiloo.style.backgroundImage = 'url(789.png)'
                                estiloo.style.color = '#505050'
                                valorex[tyy] = -1
                            }

                        } else {
                            var ms = document.getElementById('sSel').textContent
                            var mf
                            for (var jhg = 1; jhg <= 30; jhg++) {

                                if (valorexAb[jhg] == null && jhg != ms) {
                                    mf = jhg
                                }
                            }
                            var resfinal = window.confirm("Você deseja ficar com a maleta " + ms + " ou deseja ficar com a maleta " + mf + "? \n\n\nOK = maleta " + ms + "\nCancelar = maleta " + mf + "\n\n")
                            if (resfinal == true) {
                                window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + maletaValor[ms] + "\n\n")
                                document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> R$ ${maletaValor[ms]}` 
                                document.getElementById('resulfinal').style.visibility = "visible"
                                document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                                var verfh = document.getElementById('sSel').textContent
                                document.getElementById('sSel').innerHTML = `R$ ${maletaValor[ms]}`
                                document.getElementById('sSel').style.color = "green"
                                for (var tyy = 1; tyy < 31; tyy++) {
                                    estiloo = document.getElementById(tyy)
                                    estiloo.style.backgroundImage = 'url(789.png)'
                                    estiloo.style.color = '#505050'
                                    valorex[tyy] = -1
                                }
                            } else {
                                window.alert("Parabéns!\n\n\n Você ganhou \n\nR$ " + valorex[mf] + "\n\n")
                                document.getElementById('resulfinaldiv').innerHTML = `Você<br> Ganhou<br> R$ ${valorex[mf]}` 
                                document.getElementById('resulfinal').style.visibility = "visible"
                                document.getElementById('mlml').style.backgroundImage = 'url(56.png)'
                                var verfh = document.getElementById('sSel').textContent
                                document.getElementById('sSel').innerHTML = `R$ ${maletaValor[ms]}`
                                document.getElementById('sSel').style.color = "green"
                                for (var tyy = 1; tyy < 31; tyy++) {
                                    estiloo = document.getElementById(tyy)
                                    estiloo.style.backgroundImage = 'url(789.png)'
                                    estiloo.style.color = '#505050'
                                    valorex[tyy] = -1
                                }
                            }
                        }
                    }
                } else {
                    window.alert("O jogo acabou! Recarregue o navegador para jogar novamente")
                }
            } else {
                window.alert("Abra outra maleta")
            }

        }

    } else {
        document.getElementById('selecioned').style.visibility = 'visible'
        document.getElementById(num).style.background = 'none'
        document.getElementById("p" + num).remove()
        document.getElementById('sSel').innerHTML = `${num}`
        var maletaSelec = document.createElement('div')
        maletaSelec.id = 'mlml'
        maletaSelec.style.width = '5rem'
        maletaSelec.style.backgroundImage = 'url(12.png)'
        maletaSelec.style.backgroundRepeat = 'no-repeat'
        maletaSelec.style.backgroundSize = '5rem'
        maletaSelec.style.padding = '3rem'
        maletaSelec.style.marginTop = '-5rem'
        maletaSelec.style.textAlign = 'center'
        maletaSelec.style.display = 'block'
        document.getElementById('selecioned').appendChild(maletaSelec)

        inicio = 1
        window.alert('Agora você tem que abrir 6 maletas')

    }


}

