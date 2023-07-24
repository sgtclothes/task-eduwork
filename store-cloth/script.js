const inputText = document.getElementById("input-text")
const iconSearch = document.getElementById("icon-search")

inputText.addEventListener("keyup", () => {
    iconSearch.remove()
})
