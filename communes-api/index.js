// @ts-nocheck
const apiUrl = "https://geo.api.gouv.fr/communes?limit=15&nom="

const townInput = document.getElementById("town")
const townInfo = document.getElementById("townInformation")
const townList = document.getElementById("townList")

async function getTown(name) {
    const response = await fetch(apiUrl + name)
    return response.json()
}

document.getElementById("poulet").addEventListener("click", () => {
    document.getElementById("audio").play()
})

let timeOut
townInput.addEventListener("input", async (event) => {
    if (event.target.value.length === 0) {
        townList.innerHTML = ""
    }
    if (event.target.value.length < 2) {
        return
    }
    clearTimeout(timeOut)
    timeOut = setTimeout(async () => {
        const townData = await getTown(townInput.value)
        townList.innerHTML = ""
        townData.forEach((town) => {
            const liName = document.createElement("li")
            const aName = document.createElement("a")
            aName.textContent = `${town.nom} - ${town.codeDepartement}`
            const selectedTown = townData.find(
                (element) => element.siren === town.siren
            )
            aName.href = "#" + town.nom
            aName.addEventListener("click", () => showInfo(selectedTown))
            liName.append(aName)
            townList.append(liName)
        })
    }, 444)
})

function showInfo(town) {
    townInfo.innerHTML = ""
    const card = document.createElement("div")
    card.classList.add("card")
    const pName = document.createElement("h2")
    const pCodeDepartement = document.createElement("p")
    const pPopulation = document.createElement("p")
    pName.textContent = town.nom
    pCodeDepartement.textContent = `Code : ${town.codeDepartement}`
    pPopulation.textContent = `Nb d'habitants : ${town.population}`
    card.appendChild(pName)
    card.appendChild(pCodeDepartement)
    card.appendChild(pPopulation)
    townInfo.appendChild(card)
    townInput.value = town.nom
}
