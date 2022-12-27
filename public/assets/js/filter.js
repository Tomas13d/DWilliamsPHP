document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.sidebar .nav-link').forEach(function (element) {

        element.addEventListener('click', function (e) {

            let nextEl = element.nextElementSibling;
            let parentEl = element.parentElement;
            let firstChild = element.childNodes;


            if (nextEl) {
                e.preventDefault();
                let mycollapse = new bootstrap.Collapse(nextEl);

                if (nextEl.classList.contains('show')) {
                    mycollapse.hide();
                    var rotated = parentEl.parentElement.querySelector('.rotate')
                    rotated.classList.remove("rotate")
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var rotated = parentEl.parentElement.querySelector('.rotate')
                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                    // if it exists, then close all of them
                    firstChild[1].classList.toggle("rotate")
                    if (opened_submenu) {
                        new bootstrap.Collapse(opened_submenu);
                        rotated.classList.remove("rotate")
                    }
                }
            }
        }); // addEventListener
    }) // forEach
});



/* chip */
const createChip = (customText) => {
    const chip = document.createElement('div')
    const chipText = document.createElement('p')
    chip.classList.add('chip')
    chipText.classList.add('chip-text')
    chipText.classList.add('text-filter')
    chipText.innerHTML = customText
    chip.appendChild(chipText)

    return chip
}

const splitURL = (url) => {
    let deletFirstElement = url.slice(1, url.length)
    let arrayparams = deletFirstElement.split("&")
    let splited = arrayparams.map(el => el.split("="))
    return splited
}

const addFilterUrl = (key, value) => {
    let urlQuery = window.location.search
    if (urlQuery) {
        let splited = splitURL(urlQuery)
        let params = new URLSearchParams(urlQuery)
        let newUrl = ""
        if (params.has(key)) {
            let newArray = splited.map(query => {
                if (query[0] === key) {
                    query[1] += `+${value}`
                    return query.join("=")
                } else {
                    return query.join("=")
                }
            })
            newUrl = `/filterSystem?${newArray.join("&")}`
        } else {
            newUrl = `${window.location.href}&${key}=${value}`
        }
        window.location.replace(newUrl)
    } else {
        window.location.replace(`/filterSystem?${key}=${value}`)
    }

}
const removeFilterUrl = (key, value) => {
    let urlQuery = window.location.search
    if (urlQuery) {
        let oneQuery = ""
        for (let i = urlQuery.indexOf(key); i <= urlQuery.length; i++) {
            if (urlQuery[i] === "&" || urlQuery[i] === undefined) {

                break
            } else {
                oneQuery += urlQuery[i]
            }
        }
        let oneQueryLength = oneQuery.length
        let newQuery = ""
        if (oneQuery[oneQuery.indexOf(value) - 1] === "+") {
            newQuery = oneQuery.replace(`+${value}`, "")
        }
        if (oneQuery[oneQuery.indexOf(value) - 1] === "=") {
            newQuery = oneQuery.replace(value, "")
        }

        let newURL = urlQuery.split("")
        newURL.splice(urlQuery.indexOf(key), oneQueryLength, newQuery)
        newURL = newURL.join("")
        let finalURL = ""
        if (newURL[newURL.indexOf(key) + key.length + 1] === "&" || newURL[newURL.indexOf(key) + key.length + 1] === undefined || newURL[newURL.indexOf(key) + key.length + 1] === "") {
            if (newURL[newURL.indexOf(key) - 1] === "&") {
                finalURL = newURL.replace(`&${newQuery}`, "")
            } else {
                finalURL = newURL.replace(newQuery, "")
            }

        } else {
            finalURL = newURL
        }
        window.location.replace(`/filterSystem${finalURL}`)
    }



}

const checkboxInputs = document.querySelectorAll('input[type="checkbox"]')
checkboxInputs.forEach(element => {
    let urlQuery = window.location.search
    if (urlQuery) {
        let splited = splitURL(urlQuery)
        splited.forEach(query => {
            if (query[0] === element.accessKey) {
                let values = query[1].split("+")
                values.forEach(value => {
                    if (value === element.dataset.rel) {
                        element.checked = true
                        const chipContent = document.querySelector(".chip-cont")
                        const noChip = document.querySelector('.no-filters')
                        if (noChip) noChip.remove()
                        chipContent.appendChild(createChip(element.value.replaceAll("-", " ")))
                    }
                })
            }
        })
    }


    element.addEventListener('change', (e) => {
        const chipContent = document.querySelector(".chip-cont")
        if (e.target.checked) {
            addFilterUrl(e.target.accessKey, e.target.dataset.rel)
        } else {
            const allChips = chipContent.childNodes
            allChips.forEach((chip) => {
                if (chip.firstChild && chip.firstChild.innerHTML === e.target.value.replaceAll("-", " ")) chip.remove()
            })
            removeFilterUrl(e.target.accessKey, e.target.dataset.rel)
            if (allChips.length === 1) {
                const noChipMessage = document.createElement('p')
                noChipMessage.classList.add('text-filter')
                noChipMessage.classList.add('no-filters')
                noChipMessage.innerHTML = "No hay filtros activos"
                chipContent.appendChild(noChipMessage)
            }
            removeFilterUrl(e.target.accessKey, e.target.dataset.rel)
        }


    })
})

