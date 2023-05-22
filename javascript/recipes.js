function showRecipe(element, coffee) {
    let recipe = []
    switch (coffee) {
        case 'Americano':
            recipe = ["Fill a mug about 2/3rds full with hot water", "Brew a single or double espresso directly into a mug containing hot water"];

            break;

        case 'Cortado':
            recipe = ["Make a double shot of espresso", "Steam or froth 1/4 cup whole milk", "Pour the espresso into a small glass, then pour in the milk"]

            break;

        case 'Mocha':
            recipe = ["Brew an espresso into a mug, cup or glass", "Add two teaspoons of cocoa powder and mix with the espresso", "Add and top with whipped cream"]

            break;

        case 'Macchiato':
            recipe = ["Brew one shot of espresso", "Boil milk at about 130°", "Pour milk into espresso to taste and spoon the foam on top"]

            break;

        case 'Flat':
            recipe = ["Brew one shot of espresso", "Boil milk at about 130°", "Start pouring the milk from up high and slowly move your hand downwards towards the cup as you pour"]

            break;

        case 'Decaf':
            recipe = ["Use decaffinated coffee powder or beans", "Add milk to taste"]

            break;

        case 'Irish':
            recipe = ["Fill a glass about 3/4ths with any coffee", "Add and stir brown sugar to taste", "Blend in Irish whiskey", "Top with heavy cream"]

            break;

        case 'Iced':
            recipe = ["Make any type of coffee", "Let it cool to room temperature", "Fill a different glass with ice", "Pour cold coffee over the ice"]
            break;

        default:
            recipe = ["code brokey"]
            break;
    }
    const ol = document.getElementById(coffee);
    const img = element.getElementsByTagName("img")[0];
    const h3 = element.getElementsByTagName("h3")[0];

    ol.innerHTML = "";
    ol.innerHTML+="<ol>";
    recipe.forEach(step => {
        ol.innerHTML+="<li>"+step+"</li>"        
    });
    ol.innerHTML+="</ol>";

    console.log(img);
    img.classList.toggle("blur");
    h3.classList.toggle("hidden");
    ol.classList.toggle("hidden");

}