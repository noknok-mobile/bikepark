const editOrderParams = {
  wrapper: ".js-item-container",
  wrapperEditable: "js-item-container-edit",
  searchResult: ".js-search-result",
  removeButton: ".js-remove",
  searchButton: ".js-search-button",
  searchCompleteButton: ".js-search-close",
  item: ".lk-line",
  editButton: ".js-order-edit",
};

function EditMode(item, params = editOrderParams) {
  this.wrapper = item;
  this.searchResult = item.querySelector(params.searchResult);
  this.searchButton = item.querySelector(params.searchButton);
  this.completeButton = item.querySelector(params.searchCompleteButton);
  this.removeButtons = item.querySelectorAll(params.removeButton);
  this.searchBike = async function (e) {
    const item = this.wrapper;
    item.classList.add(editOrderParams.wrapperEditable);
    searchResult = this.searchResult;

    e.preventDefault();
    let request = await fetch("ajax/search.html");
    if (request.status == 200) {
      let html = await request.text();
      searchResult.innerHTML = html;
    }
  };

  this.completeSearch = function () {
    this.wrapper.classList.remove(editOrderParams.wrapperEditable);
  };
}

const editButtons = document.querySelectorAll(editOrderParams.editButton);
for (let btn of editButtons) {
  btn.addEventListener("click", editOrder);
}

async function editOrder(e) {
  //влючить реджим редактирования
  e.preventDefault();

  let request = await fetch("ajax/admin.html");
  if (request.status == 200) {
    let html = await request.text();
    const item = e.target.closest(editOrderParams.wrapper);
    item.innerHTML = html;

    reinitCustomSelect(item);
    enableOrderEdit(item); //добавить обработчики для редактирования состава заказа
  }
}

function enableOrderEdit(item) {
  const editMode = new EditMode(item);
  for (let removeButton of editMode.removeButtons) {
    removeButton.addEventListener("click", deleteItem);
  }
  editMode.searchButton.addEventListener("click", editMode.searchBike.bind(editMode));
  editMode.completeButton.addEventListener("click", editMode.completeSearch.bind(editMode));
}

function deleteItem(e) {
  const item = e.target.closest(editOrderParams.item);
  item.remove();
}

function reinitCustomSelect(wrapper) {
  const selectToUpdate = wrapper.querySelectorAll(".chosen-select");
  $(selectToUpdate).chosen({
    disable_search: true,
    width: "100%",
  });
}

function exitEditMode(){
  
}
