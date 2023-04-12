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
// let deleteButton=document.querySelectorAll(".deleteButton")
// let deleteModal=document.querySelector("#delet-modal")
// let closeModal=document.querySelectorAll(".close-modal")
// if(deleteButton){
//     deleteButton.forEach(element =>{
//         element.onclick=()=>{
//             deleteModal.classList.add('flex')
//             deleteModal.classList.remove('hidden')
//         }
//     })
// }
// if(closeModal){
//     closeModal.forEach(element =>{
//         element.onclick = ()=>{
//             deleteModal.classList.remove('flex')
//             deleteModal.classList.add('hidden')
//         }
//     })
    
// }
// add user
// addUserButton=document.querySelector("#add-userButton")
// addUser=document.querySelector("#add-User");
// closeAddUser=document.querySelector("#closeAdd-user");
// declineUser=document.querySelector("#decline-user");
// if(addUserButton){
//     addUserButton.onclick=()=>{
//         addUser.classList.add('flex')
//         addUser.classList.remove('hidden')
//     }
//     closeAddUser.onclick=()=>{
//         addUser.classList.add('hidden')
//         addUser.classList.remove('remove')
//     }
//     declineUser.onclick=()=>{
//         addUser.classList.add('hidden')
//         addUser.classList.remove('remove')
//     }
// }

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
// edit category

let editCategory=document.querySelector("#edit-category")
let formEditcategory=document.querySelector("#form-editcategory")
let closeFormcategorieIconup=document.querySelector("#close-formcategorieIconup")
let closeCategoryButtonUpdate=document.querySelector("#close-categoryButtonUpdate")
let nomUpcategory=document.querySelector("#nom-upcategory")
let nomCategoryupdateError=document.querySelector(".nomCategoryupdate-error")
function editCtageory(id,name){
    
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
let updateCategory=document.querySelector("#update-category")
if(updateCategory){
    updateCategory.addEventListener('click',(e)=>{
       if(nomUpcategory.value==''){
         e.preventDefault();
         nomCategoryupdateError.classList.add('block')
         nomCategoryupdateError.classList.remove('hidden')
       }
    })
    nomUpcategory.onclick=()=>{
        nomCategoryupdateError.classList.add('hidden')
        nomCategoryupdateError.classList.remove('block')
    }
}
// delete category
deletedIdConfirm=document.querySelector("#deleted-idConfirm")
deletCategoryForm=document.querySelector("#delet-categoryForm")
closeDeleteCategorydModal=document.querySelector("#close-deleteCategorydModal")
cancelModalDelete=document.querySelector("#cancel-modalDelete")
function deleteCategory(id){
    deletedIdConfirm.value=id
    deletCategoryForm.classList.add('flex');
    deletCategoryForm.classList.remove('hidden');
}
if(closeDeleteCategorydModal){
    closeDeleteCategorydModal.onclick=()=>{
        deletCategoryForm.classList.add('hidden');
        deletCategoryForm.classList.remove('flex');
    }
}
if(cancelModalDelete){
    cancelModalDelete.onclick=()=>{
        deletCategoryForm.classList.add('hidden');
        deletCategoryForm.classList.remove('flex');
    }
}
// delete marque
let deletedmarqueIdConfirm=document.getElementById('deletedmarque-idConfirm')
let deletMarqueForm =document.getElementById('delet-marqueForm')
let closeDeleteMarque=document.getElementById('close-deleteMarque')
let cancelModalmarque=document.getElementById('cancel-modalmarque')
function deletMarque(id){
     deletedmarqueIdConfirm.value=id
     deletMarqueForm.classList.add('flex');
     deletMarqueForm.classList.remove('hidden');
}
if(closeDeleteMarque){
    closeDeleteMarque.onclick=()=>{
        deletMarqueForm.classList.remove('flex');
        deletMarqueForm.classList.add('hidden');
    }
}
if(cancelModalmarque){
    cancelModalmarque.onclick=()=>{
        deletMarqueForm.classList.remove('flex');
        deletMarqueForm.classList.add('hidden');
    }
}
// edit marque
let formMarque=document.querySelector("#form-marque")
let declineMarque=document.querySelector("#decline-marque")
let closeMarque=document.querySelector("#close-marque")
let marqueId=document.querySelector("#marque-id")
let nomUpmarque=document.querySelector("#nom-upmarque")
let updateMarque=document.querySelector("#update-marque")
let nommarqueupdateError=document.querySelector(".nommarqueupdate-error")
function editMarque(id,name){
    formMarque.classList.add('flex')
    formMarque.classList.remove('hidden')
    marqueId.value=id
    nomUpmarque.value=name
}
if(declineMarque){
    declineMarque.onclick=()=>{
        formMarque.classList.remove('flex')
        formMarque.classList.add('hidden')
    }
}
if(closeMarque){
    closeMarque.onclick=()=>{
        formMarque.classList.remove('flex')
        formMarque.classList.add('hidden')
    }
}
if(updateMarque){
    updateMarque.addEventListener('click', (e) => {
        let nomUpmarqueValue = nomUpmarque.value.trim();
        if (!regex.test(nomUpmarqueValue)) {
            e.preventDefault();
            nommarqueupdateError.classList.add('block')
            nommarqueupdateError.classList.remove('hidden')
        }
    })
}
$(document).ready(function() {
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : 'search',
        data:{'search':$value},
        success:function(data){
        $('tbody').html(data);
        }
        });
    })        
    $('#toggleModalButton').click(function() {
      // get the user data from the server
      $.ajax({
        type: 'GET',
        url: '/users-info', // replace with your Laravel route
        success: function(response) {
          // populate the form fields with the user data
          $('#name').val(response.name);
          $('#email').val(response.email);
          // check if the role_name option exists in the dropdown
          var role_name= response.role_name;
          var roles = response.roles;
          var select = $('#role');
            select.empty();
            $.each(roles, function(index, role) {
                if(role_name == role.name ){
                  select.append('<option selected value="' + role.id + '">' + role.name + '</option>');
                }else{
                  select.append('<option value="' + role.id + '">' + role.name + '</option>');
                }
            });
          $('#password').val(response.password);
        },
        error: function(xhr, status, error) {
          console.log(xhr.responseText); // log the error message
        }
      });
    });
  
      $('#update-user-info-form').submit(function(event) {
        $('.invalid-feedback').remove();
        event.preventDefault();

          var formData = $(this).serialize();
          var url = $(this).attr('action');
          $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function(response) {
                $('.message-success-updated').text(response.message);
                $('#updated-success').addClass('flex'); 
                $('#updated-success').removeClass('hidden')
            },
            error: function(xhr) {
              var errors = xhr.responseJSON.errors;
              // clear any existing error messages
              $.each(errors, function(key, value) {
                $('#' + key).after('<span class="text-red-500"><strong>' + value + '</strong></span>');
            });
            }
          });
      });


      $('#create-product-form').submit(function(event) {
        $('.invalid-feedback').remove();
        event.preventDefault();

          var formData = $(this).serialize();
          var url = $(this).attr('action');
          $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function(response) {
                $('.message-success-createProduct').text(response.message);
                $('#create-product-success').addClass('flex'); 
                $('#create-product-success').removeClass('hidden')
            },
            error: function(xhr) {
              var errors = xhr.responseJSON.errors;
              // clear any existing error messages
              $.each(errors, function(key, value) {
                $('#' + key).after('<span class="text-red-500"><strong>' + value + '</strong></span>');
            });
            }
          });
      });

      let editButtons = document.querySelectorAll('.edit-productInfo');
      let editProductModal=document.querySelector("#edit-productModal");
      editButtons.forEach(button => {
        $(button).click(function (){
            editProductModal.classList.add('flex')
            editProductModal.classList.remove('hidden')
            var productId = $(this).data('product-id');
            $.ajax({
                type: 'GET',
                url: '/product-info/'+ productId,
                success: function(response) {
                  let categories = response.categories;
                  let marques = response.marques;
                  let category_name = response.category_name;
                  let marque_name = response.marque_name;
                  let selectCtagories = $('#ctegory_idupdated')
                  let selectMarques = $('#marque_idupdated')
                  selectCtagories.empty();
                  selectMarques.empty();
                  $('#reference_updated').val(response.reference_updated);
                  $('#nom_updated').val(response.nom_updated);
                  $('#quantiteupdated').val(response.quantiteupdated);
                  $('#prixupdated').val(response.prixupdated);
                  $('#product_formId').val(response.product_id)
                    $.each(categories, function(index, category) {
                        if(category_name == category.name ){
                            selectCtagories.append('<option selected value="' + category.id + '">' + category.name + '</option>');
                        }else{
                            selectCtagories.append('<option value="' + category.id + '">' + category.name + '</option>');
                        }
                    });
                    $.each(marques, function(index, marque) {
                        if(marque_name == marque.name ){
                            selectMarques.append('<option selected value="' + marque.id + '">' + marque.name + '</option>');
                        }else{
                            selectMarques.append('<option value="' + marque.id + '">' + marque.name + '</option>');
                        }
                    });
                },
                error: function(xhr, status, error) {
                  console.log(xhr.responseText); // log the error message
                }
              });
        });
      });
       
      $('#edit-product-form').submit(function(event) {
        $('.invalid-feedback').remove();
        event.preventDefault();
          var formData = $(this).serialize();
          var url = $(this).attr('action');
          console.log(url)
          $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function(response) {
                var successUrl = window.location.href = '/products?successMessage=' + response.message;
                window.location.href = successUrl;
            },
            error: function(xhr) {
              var errors = xhr.responseJSON.errors;
              // clear any existing error messages
              $.each(errors, function(key, value) {
                $('#' + key).after('<span class="text-red-500"><strong>' + value + '</strong></span>');
            });
            }
          });
      });

      var urlParams = new URLSearchParams(window.location.search);
      var successMessage = urlParams.get('successMessage');
      if (successMessage) {
        $('.message-success-updateProduct').text(successMessage);
        $('#update-product-success').addClass('flex'); 
        $('#update-product-success').removeClass('hidden');
    }
    $('#update-product-success button').click(function() {
        // remove "successMessage" parameter from URL
        var url = new URL(window.location.href);
        url.searchParams.delete('successMessage');
        window.history.replaceState({}, document.title, url);
    })
});
// close update user alert
let closeUpdateUserbutton=document.querySelector("#close-updateUserbutton")
let updatedSuccess=document.querySelector("#updated-success")
  if(closeUpdateUserbutton){
    closeUpdateUserbutton.onclick=()=>{
        updatedSuccess.classList.add('hidden')
        updatedSuccess.classList.remove('flex')
    }
  }


let displayDropdown=document.querySelector(".products-list")
let hideProductsList=document.querySelector(".hideProducts-list")
if(displayDropdown){
    displayDropdown.addEventListener('click',()=>{
        console.log("display")
        document.querySelector('.product-dropDown').classList.add('block')
        document.querySelector('.product-dropDown').classList.remove('hidden')
        hideProductsList.classList.add('block')
        hideProductsList.classList.remove('hidden')
        displayDropdown.classList.add('hidden')
        displayDropdown.classList.remove('block')
   })
}
if(hideProductsList){
    hideProductsList.addEventListener('click',()=>{
        console.log("remove")
        document.querySelector('.product-dropDown').classList.add('hidden')
        document.querySelector('.product-dropDown').classList.remove('block')
        displayDropdown.classList.add('block')
        displayDropdown.classList.remove('hidden')
        hideProductsList.classList.add('hidden')
        hideProductsList.classList.remove('block')
   })
}
let  productDeletedId= document.querySelector("#product_deletedId")
function deleteProduct(id){
 
    productDeletedId.value=id
}

