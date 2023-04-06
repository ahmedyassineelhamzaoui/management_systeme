let closeBtn      =document.querySelector("#close-btn")
let asideBar      =document.querySelector("#aside-bar")
let mainPage      =document.querySelector("#main-page")
let showMenu      =document.querySelector("#show-menu")
let dashboardName =document.querySelector(".dashboard-name")

let towOpttions=document.querySelector("#tow-opttions")

closeBtn.addEventListener('click',()=>{
    asideBar .style.display="none";
    mainPage .style.marginLeft=0;
    showMenu.style.display="inline" ;
    dashboardName.style.paddingLeft="1em";
    towOpttions.style.display="block"
})

showMenu.addEventListener('click',()=>{
    document.querySelector(".logo h2").style.display="block"
    towOpttions.style.display="none"
    asideBar.style.width="16rem"
    closeBtn.style.display = "block"
    asideBar.style.display="block";
    dashboardName.style.paddingLeft="5rem";
    h3Hedding.forEach(
        element=>{element.style.display="inline"}
    )
})
let rightClick         = document.querySelector(".right-icon")
let leftClick          = document.querySelector(".left-icon")
let doubleSens         = document.querySelector(".double-sense")
let defaultToggleStyle = document.querySelector(".defaultToggle-style")
let secondToggleStyle  = document.querySelector(".secondToggle-style")
let h3Hedding          = document.querySelectorAll(".hedding-h3")
let h2Hedding          = document.querySelector("hedding-h2")
leftClick.addEventListener('click',()=>{
    dashboardName.style.paddingLeft="5rem";
    console.log("segher")
    document.querySelector(".logo h2").style.display="none"
    rightClick.style.display='block'
    leftClick.style.display='none'
    towOpttions.classList.remove('double-sens')
    towOpttions.classList.add('secondToggle-style')
    towOpttions.classList.remove('defaultToggle-style')
        h3Hedding.forEach(
           element=>{element.style.display="none"}
        )
        asideBar.style.width="5rem"
        mainPage.style.marginLeft="5rem"
})

rightClick.addEventListener('click',()=>{
    console.log("kber")
    document.querySelector(".logo h2").style.display="block"
    dashboardName.style.paddingLeft="16rem";
    leftClick.style.display='block'
    rightClick.style.display='none'
    towOpttions.classList.remove('double-sens')
    towOpttions.classList.add('defaultToggle-style')
    towOpttions.classList.remove('secondToggle-style')
        h3Hedding.forEach(
            element=>{element.style.display="block"}
        )
        asideBar.style.width="16rem"
        mainPage.style.marginLeft="16rem"
})

window.addEventListener("resize", ()=>{
    if (window.innerWidth <= 420) {
        towOpttions.style.display="none"    
        asideBar .style.display="none";
        mainPage .style.marginLeft=0;
        showMenu.style.display="inline" ;
        dashboardName.style.paddingLeft="1em";
    }
    if (window.innerWidth > 1200) {
        towOpttions.style.display="block"    
        asideBar .style.display="block";
        asideBar .style.width="16rem";
        showMenu.style.display="none" ;
        mainPage.style.marginLeft="16rem";
        closeBtn.style.display = "none"
        dashboardName.style.paddingLeft="16rem";
        towOpttions.classList.remove("secondToggle-style")
        towOpttions.classList.add("defaultToggle-style")
        leftClick.style.display='block'
        rightClick.style.display='none'
        h3Hedding.forEach(
            element=>{element.style.display="block"}
        )
    }
    if (window.innerWidth > 420 && window.innerWidth < 1200){
        towOpttions.style.display="block"    
        asideBar.style.width="5rem"
        asideBar.style.display="block";
        dashboardName.style.paddingLeft="5rem";
        document.querySelector(".logo h2").style.display="none"
        rightClick.style.display="block"
        leftClick.style.display="none"
        towOpttions.classList.remove("double-sens")
        towOpttions.classList.add("secondToggle-style")
        towOpttions.classList.remove("defaultToggle-style")
        mainPage.style.marginLeft="5rem"
        showMenu.style.display="none";
        closeBtn.style.display = "none"
        h3Hedding.forEach(
            element=>{element.style.display="none"}
        )
    }
})

themeMode=document.querySelector('.theme-mode');
const myPage=document.body;
if(themeMode){
    themeMode.addEventListener('click',() =>{
        myPage.classList.toggle('dark-theme-variables')
        themeMode.querySelector('span:nth-child(1)').classList.toggle('activeTo');
        themeMode.querySelector('span:nth-child(2)').classList.toggle('activeTo');
        const theme = myPage.classList.contains('dark-theme-variables') ? 'darkMode' : 'lightMode';
        localStorage.setItem('PageTheme', JSON.stringify(theme));
    })
}
const getTheme = JSON.parse(localStorage.getItem('PageTheme'));
if (getTheme === 'darkMode') {
  myPage.classList.add('dark-theme-variables');
}

  const links = document.querySelectorAll('.my-pagesSidebar');

  links.forEach(link => {
    link.addEventListener('click', e => {
      // remove the active class from all links
      links.forEach(link => link.classList.remove('active'));

      // add the active class to the clicked link
      link.classList.add('active');
    });

    // check if the current page's URL matches the link's href
    if (window.location.href.includes(link.getAttribute('href'))) {
      // add the active class to the link
      link.classList.add('active');
    } else {
      // remove the active class from the link
      link.classList.remove('active');
    }
  });


// delete modal
let deleteButton=document.querySelectorAll(".deleteButton")
let deleteModal=document.querySelector("#delet-modal")
let closeModal=document.querySelectorAll(".close-modal")
if(deleteButton){
    deleteButton.forEach(element =>{
        element.onclick=()=>{
            deleteModal.classList.add('flex')
            deleteModal.classList.remove('hidden')
        }
    })
}
if(closeModal){
    closeModal.forEach(element =>{
        element.onclick = ()=>{
            deleteModal.classList.remove('flex')
            deleteModal.classList.add('hidden')
        }
    })
    
}
// add user
addUserButton=document.querySelector("#add-userButton")
addUser=document.querySelector("#add-User");
closeAddUser=document.querySelector("#closeAdd-user");
declineUser=document.querySelector("#decline-user");
if(addUserButton){
    addUserButton.onclick=()=>{
        addUser.classList.add('flex')
        addUser.classList.remove('hidden')
    }
    closeAddUser.onclick=()=>{
        addUser.classList.add('hidden')
        addUser.classList.remove('remove')
    }
    declineUser.onclick=()=>{
        addUser.classList.add('hidden')
        addUser.classList.remove('remove')
    }
}

// add product
addProduct=document.querySelector("#add-product")
addProductForm=document.querySelector("#add-ProductForm");
closeAddProduct=document.querySelector("#closeAdd-product");
declineProduct=document.querySelector("#decline-product");
if(addProduct){
    addProduct.onclick=()=>{
        addProductForm.classList.add('flex')
        addProductForm.classList.remove('hidden')
    }
    closeAddProduct.onclick=()=>{
        addProductForm.classList.add('hidden')
        addProductForm.classList.remove('remove')
    }
    declineProduct.onclick=()=>{
        addProductForm.classList.add('hidden')
        addProductForm.classList.remove('remove')
    }
}

let form = document.getElementById('role-form');
if(form){
    form.addEventListener('submit', function(e) {
        let checkboxes = document.querySelectorAll('#permissions input[type="checkbox"]');
        let checkedCheckboxes = Array.from(checkboxes).filter(checkbox => checkbox.checked);
        if (checkedCheckboxes.length === 0) {
            e.preventDefault();
            document.getElementById('error-msg').classList.add('block');
            document.getElementById('error-msg').classList.remove('hidden');
        }
    });
}
let formUpdate = document.getElementById('role-formupdate');
if(formUpdate){
    formUpdate.addEventListener('submit', function(e) {
        let checkboxes = document.querySelectorAll('#permissions input[type="checkbox"]');
        let checkedCheckboxes = Array.from(checkboxes).filter(checkbox => checkbox.checked);
        if (checkedCheckboxes.length === 0) {
            e.preventDefault();
            document.getElementById('error-msgu').classList.add('block');
            document.getElementById('error-msgu').classList.remove('hidden');
        }
    });
}

// add category
let addCategory=document.querySelector("#add-category")
let fromCategory=document.querySelector("#form-category")
let closeFormcategorieIcon=document.querySelector("#close-formcategorieIcon")
let closeCtegoryButton=document.querySelector("#close-ctegoryButton")

if(addCategory){
    addCategory.addEventListener('click',()=>{
        fromCategory.classList.add('flex')
        fromCategory.classList.remove('hidden')
    })
    closeFormcategorieIcon.addEventListener('click',()=>{
        fromCategory.classList.add('hidden')
        fromCategory.classList.remove('flex')
    })
    closeCtegoryButton.addEventListener('click',()=>{
        fromCategory.classList.add('hidden')
        fromCategory.classList.remove('flex')
    })
}
let nomCategory = document.getElementById("nom-category");
let nomCategoryError = document.querySelector(".nomCategory-error")
let createCategory = document.getElementById("create-category")
let regex = /^[a-zA-Z0-9 ]{2,20}$/;

if (createCategory) {
    
    nomCategory.onclick = () => {
        if (nomCategoryError) {
            nomCategoryError.classList.remove('block')
            nomCategoryError.classList.add('hidden')
        }
    }

    createCategory.addEventListener('click', (e) => {
        let nomCategoryValue = nomCategory.value.trim();
        if (!regex.test(nomCategoryValue)) {
            e.preventDefault();
            nomCategoryError.classList.add('block')
            nomCategoryError.classList.remove('hidden')
        }
    })
}

let editCategory=document.querySelector("#edit-category")
let formEditcategory=document.querySelector("#form-editcategory")
let closeFormcategorieIconup=document.querySelector("#close-formcategorieIconup")
let closeCategoryButtonUpdate=document.querySelector("#close-categoryButtonUpdate")
function editCtageory(id,name){
    let nomUpcategory=document.querySelector("#nom-upcategory")
    let categoryId=document.querySelector("#category-id")
    categoryId.value=id
    nomUpcategory.value=name
    formEditcategory.classList.add('flex');
    formEditcategory.classList.remove('hidden');
}
if(closeFormcategorieIconup){
    closeFormcategorieIconup.onclick=()=>{
        formEditcategory.classList.add('hidden');
        formEditcategory.classList.remove('flex');
    }
}
if(closeCategoryButtonUpdate){
    closeCategoryButtonUpdate.onclick=()=>{
        formEditcategory.classList.add('hidden');
        formEditcategory.classList.remove('flex');
    }
}