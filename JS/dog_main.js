import { DogAPI } from "./dog_API.js";

const dogImageElement = document.getElementById("dogImage");
const refreshButton = document.getElementById("refreshButton");

async function updateDogImage() {
    try {
        const api = new DogAPI();
        const dog = await api.getRandomDogImage();
        // const imageUrl = await api.getRandomDogImage();
        // const dog = new DogImage(imageUrl);
        //  (// De bovenstaande regel is niet nodig omdat we de DogImage al in de getRandomDogImage methode maken/oude code)
        dogImageElement.src = dog.url;
        dogImageElement.alt = dog.getDescription();
    } catch (error) {
        console.error("Fout bij ophalen van hond:", error);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    updateDogImage(); 
    refreshButton.addEventListener("click", updateDogImage); 
});
