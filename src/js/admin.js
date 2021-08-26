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
  for (let removeButton of item.querySelectorAll(
    editOrderParams.removeButton
  )) {
    removeButton.addEventListener("click", deleteItem);
  }

  item
    .querySelector(editOrderParams.searchCompleteButton)
    .addEventListener("click", completeSearch);

  item
    .querySelector(editOrderParams.searchButton)
    .addEventListener("click", searchBike);
}

function deleteItem(e) {
  const item = e.target.closest(editOrderParams.item);
  item.remove();
}

async function searchBike(e) {
  const item = e.target.closest(editOrderParams.wrapper);
  item.classList.add(editOrderParams.wrapperEditable);
  searchResult = item.querySelector(editOrderParams.searchResult);

  e.preventDefault();
  let request = await fetch("ajax/search.html");
  if (request.status == 200) {
    let html = await request.text();
    searchResult.innerHTML = html;
  }
}

function completeSearch(e) {
  e.target
    .closest(editOrderParams.wrapper)
    .classList.remove(editOrderParams.wrapperEditable);
}

function reinitCustomSelect(wrapper) {
  const selectToUpdate = wrapper.querySelectorAll(".chosen-select");
  $(selectToUpdate).chosen({
    disable_search: true,
    width: "100%",
  });
}
