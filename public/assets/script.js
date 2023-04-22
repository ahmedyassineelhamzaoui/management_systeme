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
        document.querySelector(".logo h2").style.display='block'
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
        document.querySelector("#form-contentCategory").reset();
    })
    closeCtegoryButton.addEventListener('click',(event)=>{
        event.preventDefault();
         document.querySelector("#form-contentCategory").reset();
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
    closeCategoryButtonUpdate.addEventListener('click',(e)=>{
        e.preventDefault();
        formEditcategory.classList.add('hidden');
        formEditcategory.classList.remove('flex');
    })
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
    declineMarque.addEventListener('click',(e)=>{
        e.preventDefault();
        formMarque.classList.remove('flex')
        formMarque.classList.add('hidden')
    })
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
                $('#create-product-form')[0].reset();
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
    

      let editCommande = document.querySelectorAll('.edit-commande');
      let editCommandeModal=document.querySelector('#edit-commandeModal');

      editCommande.forEach(button => {
        $(button).click(function (){
            editCommandeModal.classList.add('flex')
            editCommandeModal.classList.remove('hidden')
            var commandeId = $(this).data('commande-id');
            document.querySelector("#comande-updatedId").value=commandeId
            let commandeStatus=$('#commande-status')
            $.ajax({
                type: 'GET',
                url: '/commande-info/'+commandeId ,
                success: function(response) {
                  let status = response.commande_status;
                commandeStatus.empty();
                commandeStatus.append('<option ' + (status == "en cours" ? 'selected' : '') + ' value="en cours" >en cours</option>');
                commandeStatus.append('<option ' + (status == "Livré" ? 'selected' : '') + ' value="Livré" >Livré</option>');

                },
                error: function(xhr, status, error) {
                  console.log(xhr.responseText); // log the error message
                }
              });
        });
      });
      $('#edit-commande-form').submit(function(event) {
        event.preventDefault();
          var formData = $(this).serialize();
          var url = $(this).attr('action');
          $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function(response) {
                console.log(response);
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
    if(checkAllProductComande){
        if (checkAllProductComande) {
            checkAllProductComande.addEventListener('change', function() {
                $('.check-one-rowComande').prop('checked', this.checked);
            });
        }
    }
    var checkedRows = [];
    if (checkAllRows) {
        checkAllRows.addEventListener('change', function() {
            $('.chack-one-row').prop('checked', this.checked);
        
            checkedRows = [];
            $('.chack-one-row:checked').each(function() {
                var row = $(this).closest('tr');
                var reference = row.find('label').text();
                var nom = row.find('td:eq(0)').text();
                var marque = row.find('td:eq(1)').text();
                var category = row.find('td:eq(2)').text();
                var quantity = row.find('td:eq(3)').text();
                var price = row.find('td:eq(4)').text();
    
                checkedRows.push({
                    reference: reference,
                    nom: nom,
                    marque: marque,
                    category: category,
                    quantity: quantity,
                    price: price
                });
            });
            if($('.chack-one-row:checked').length > 0){
                $('#show-selectproducts').addClass('block');
                $('#show-selectproducts').removeClass('hidden');
            }else{
                $('#show-selectproducts').addClass('hidden');
                $('#show-selectproducts').removeClass('block');
            }
        });
    }
    $('.chack-one-row').on('change', function() {
        var row = $(this).closest('tr');

        if ($(this).is(':checked')) {
          // Get the row that contains the checked checkbox
          
          // Find the information you want to display in the console
          var reference = row.find('label').text();
          var nom = row.find('td:eq(0)').text();
          var marque = row.find('td:eq(1)').text();
          var category = row.find('td:eq(2)').text();
          var quantity = row.find('td:eq(3)').text();
          var price = row.find('td:eq(4)').text();
          
          checkedRows.push({
            reference: reference,
            nom: nom,
            marque: marque,
            category: category,
            quantity: quantity,
            price: price
          });
          $('#show-selectproducts').addClass('block')
          $('#show-selectproducts').removeClass('hidden')
        }else {
            // If the checkbox is unchecked, remove the corresponding element from the checkedRows array
            var reference = row.find('label').text();
            for (var i = 0; i < checkedRows.length; i++) {
              if (checkedRows[i].reference === reference) {
                checkedRows.splice(i, 1);
                break;
              }
            }
            if ($('.chack-one-row:checked').length === 0) {
                $('#show-selectproducts').addClass('hidden')
                $('#show-selectproducts').removeClass('block')
            }
        }
    });


    
    $('#show-selectproducts').on('click', function() {
    // Loop through the checkedRows array and display the information in the console
    var tableRows = '';
    for (var i = 0; i < checkedRows.length; i++) {
        tableRows += '<tr class="border-b text-tablecolor">' +
            '<td class="px-6 py-4"><input type="hidden" name="references[]" value="' + checkedRows[i].reference + '">' + checkedRows[i].reference + '</td>' +
            '<td class="px-6 py-4">' + checkedRows[i].nom + '</td>' +
            '<td class="px-6 py-4">' + checkedRows[i].marque + '</td>' +
            '<td class="px-6 py-4">' + checkedRows[i].category + '</td>' +
            '<td class="px-6 py-4">' + checkedRows[i].price + '</td>' +
            '<td class="px-6 py-4">' + '<input type="number" class="border-gray-200 text-start bg-transparent" name="quantity[]" value="' + parseFloat(checkedRows[i].quantity.replace(/[^\d.-]/g, '')) + '" min="0" step="1"></td>' +
            '</tr>';
    }

    var tbody = document.getElementById('tbody-products');
    tbody.innerHTML = tableRows;
    });
    $('#product-selectedForm').on('submit', function(e) {
        e.preventDefault(); // prevent the form from submitting normally
    
        var formData = $(this).serialize(); // get form data as serialized string
    
        // make AJAX call to update database
        $.ajax({
            url: '/alimenter-stock',
            type: 'POST',
            data: formData,
            success: function(response) {
                if(response.error){
                    $('#alimenter-stock-error').addClass('flex')
                    $('#alimenter-stock-error').removeClass('hidden')
                    $('.message-error-alimenter').text(response.error)
                    $('#alimenter-stock-success').addClass('hidden')
                    $('#alimenter-stock-success').removeClass('flex ')
                }else{
                    $('#alimenter-stock-error').addClass('hidden')
                    $('#alimenter-stock-error').removeClass('flex')
                    $('#alimenter-stock-success').addClass('flex')
                    $('#alimenter-stock-success').removeClass('hidden')
                    $('.message-success-alimenter').text(response.message)
                }
                console.log(response);
            },
            error: function(xhr, status, error) {
                // handle error
                console.log(xhr.responseText);
            }
        });
    });
    $('#product-selectedFormCommande').on('submit', function(e) {
        e.preventDefault(); // prevent the form from submitting normally
    
        var formData = $(this).serialize(); // get form data as serialized string
    
        // make AJAX call to update database
        $.ajax({
            url: '/create-commande',
            type: 'POST',
            data: formData,
            success: function(response) {
                // handle 
                $('#success-commande').addClass('flex')
                $('#success-commande').removeClass('hidden')
                $('.add-commandeMessage').text(response.message);
            },
            error: function(xhr, status, error) {
                // handle error
                console.log(xhr.responseText);
            }
        });
    });
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : 'search',
        data:{'search':$value},
        success:function(response){
            let tablelines = '';
            for (var i = 0; i < response.data.length; i++) {
                tablelines += '<tr class="border-b text-tablecolor">' +
                '<td class="px-6 py-4">' + response.data[i].reference + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].nom + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].marque.name + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].category.name + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].quantite + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].prix +'</td>' +
                '<td class="px-6 py-4">'+
                    '<div class="flex items-center">'+
                        '<button  data-product-id="'+response.data[i].id +'" data-modal-target="edit-productModal" class="text-green-500 cursor-pointer edit-productInfo">'+
                            '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg>'+                                                      
                        '</button>'+   
                        '<button onclick="deleteProduct('+response.data[i].id +')" data-modal-target="delete-product" data-modal-toggle="delete-product"  class="text-red-600 cursor-pointer delete-product">'+
                            '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /></svg>'+                                                      
                        '</button>'+
                        '</form>'+
                    '</div>'+
            '</td>'+
                '</tr>';
            }
        $('tbody').html(
            tablelines
        );
        }
        });
    }) 
    $('#searchProduct').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : 'search',
        data:{'search':$value},
        success:function(response){
            let tablelines = '';
            for (var i = 0; i < response.data.length; i++) {
                tablelines += '<tr class="border-b text-tablecolor">' +
                '<td class="px-6 py-4">' + response.data[i].reference + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].nom + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].marque.name + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].category.name + '</td>' +
                '<td class="px-6 py-4">' + response.data[i].prix +'</td>' + 
                '<td class="px-6 py-4">' + response.data[i].quantite + '</td>' +
                '</tr>';
            }
        $('#tbodyProductForm').html(
            tablelines
        );
        }
        });
    })   
    $('#searchIn-stock').on('keyup', function () {
        $value = $(this).val();
        $.ajax({
            type: 'get',
            url: '/searchInStock',
            data: { 'search_inStock': $value },
            success: function (response) {
                    let tablelines = '';
                    for (var i = 0; i < response.data.length; i++) {
                        tablelines += '<tr class="border-b text-tablecolor">' +
                            '<td class="px-6 py-4">' + response.data[i].reference + '</td>' +
                            '<td class="px-6 py-4">' + response.data[i].nom + '</td>' +
                            '<td class="px-6 py-4">' + response.data[i].marque.name + '</td>' +
                            '<td class="px-6 py-4">' + response.data[i].category.name + '</td>' +
                            '<td class="px-6 py-4">' + response.data[i].quantite + '</td>' +
                            '<td class="px-6 py-4">' + response.data[i].prix + '</td>' +
                            '</tr>';
                    }
                    $('#body-userStock').html(
                        tablelines
                    );
            },
            error: function (xhr, status, error) {
                console.log(error); 
            }
        });
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
    document.querySelector("#delete-product").classList.add('flex')
    document.querySelector("#delete-product").classList.remove('hidden')
    productDeletedId.value=id
}
function editProduct(id){
    document.querySelector("#edit-productModal").classList.add('flex')
    document.querySelector("#edit-productModal").classList.remove('hidden')
    document.querySelector("#product_formId").value=id
}


let  checkAllRows = document.querySelector('#check-allRows');
let  checkOneRow = document.querySelectorAll('.chack-one-row');
let checkAllProductComande=document.querySelector("#check-allProductComande")
let checkOneRowComande=document.querySelectorAll(".check-one-rowComande")



let hideCxheckboxButtons =document.querySelector("#hide-checkboxButtons");
let alementerStock=document.querySelector("#alementer-stock")

if(alementerStock){
    alementerStock.addEventListener('click',(e)=>{
        hideCxheckboxButtons.classList.add('block')
        hideCxheckboxButtons.classList.remove('hidden')
        checkAllRows.classList.add('block')
        checkAllRows.classList.remove('hidden')
    
        checkOneRow.forEach(element=>{
            element.classList.add('block')
            element.classList.remove('hidden')
        })
    })
}

if(hideCxheckboxButtons){
    hideCxheckboxButtons.addEventListener('click',(e)=>{
        hideCxheckboxButtons.classList.add('hidden')
        hideCxheckboxButtons.classList.remove('block')
        checkAllRows.classList.remove('block')
        checkAllRows.classList.add('hidden')
        checkOneRow.forEach(element=>{
            element.classList.remove('block')
            element.classList.add('hidden')
        })
    })
}
function deleteCommande(id){
    document.querySelector("#commande_deletedId").value=id
}

function  deleteNotification(id)
{
    document.querySelector("#delete-notification").classList.add('flex')
    document.querySelector("#delete-notification").classList.remove('hidden')
    document.querySelector("#notification_deletedId").value=id
}
// hide the feeding stock alert  message
let alimenterStockhidden=document.querySelector("#alimenter-stockhidden");
if(alimenterStockhidden){
    alimenterStockhidden.addEventListener('click',()=>{
        document.querySelector("#alimenter-stock-success").classList.add('hidden')
        document.querySelector("#alimenter-stock-success").classList.remove('flex')
    })
}
// hide the feeding stock alert  message
let alimenterStockErrorHidden=document.querySelector("#alimenter-stockErrorhidden");
if(alimenterStockErrorHidden){
    alimenterStockErrorHidden.addEventListener('click',()=>{
        document.querySelector("#alimenter-stock-error").classList.add('hidden')
        document.querySelector("#alimenter-stock-error").classList.remove('flex')
    })
}
// hide the create product message
let createProductMessageHidden=document.querySelector("#create-product-message-hidden")
if(createProductMessageHidden){
    createProductMessageHidden.addEventListener('click',(e)=>{
        document.querySelector("#create-product-success").classList.add('hidden')
    })
}

// display large Modal
let displayLargeModal=document.querySelector("#display-largeModal")
if(displayLargeModal){
    displayLargeModal.addEventListener('click',(e)=>{
        document.querySelector("#large-modal").classList.add('flex')
        document.querySelector("#large-modal").classList.remove('hidden')
    })
}
// close large modal Product
let closeLargeModalProduct=document.querySelector("#close-largeModalProduct")
if(closeLargeModalProduct){
    closeLargeModalProduct.addEventListener('click',(e)=>{
        window.location.href = '/products';
        document.querySelector("#large-modal").classList.add('hidden')
        document.querySelector("#large-modal").classList.remove('flex') 
        document.querySelector("#create-product-form").reset();
    })
}
// declie large modal Product
let declineLargeModalProduct=document.querySelector("#decline-largeModalProduct")
if(declineLargeModalProduct){
    declineLargeModalProduct.addEventListener('click',(e)=>{
        window.location.href = '/products';
        document.querySelector("#create-product-form").reset();
        document.querySelector("#large-modal").classList.add('hidden')
        document.querySelector("#large-modal").classList.remove('flex') 
    })
}
// decline delete notification
let declineDeleteNotification=document.querySelector("#decline-deleteNotification")
if(declineDeleteNotification){
    declineDeleteNotification.addEventListener('click',(e)=>{
        document.querySelector("#delete-notification").classList.add('hidden')
        document.querySelector("#delete-notification").classList.remove('flex')
    })
}
// close delete notification
let closeDeleteNotification=document.querySelector("#close-deleteNotification")
if(closeDeleteNotification){
    closeDeleteNotification.addEventListener('click',(e)=>{
        document.querySelector("#delete-notification").classList.add('hidden')
        document.querySelector("#delete-notification").classList.remove('flex')
    })
}