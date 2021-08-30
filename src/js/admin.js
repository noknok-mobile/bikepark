const editMode = {
  params: {
    wrapper: ".js-item-container",
    wrapperEditable: "js-item-container-edit",
    searchResult: ".js-search-result",
    removeButton: ".js-remove",
    searchButton: ".js-search-button",
    searchCompleteButton: ".js-search-close",
    item: ".lk-line",
    editButton: ".js-order-edit",
  },
  wrapper: null,
  editButtons: null,
  searchResult: null,
  removeButtons: null,
  searchButton: null,
  searchCompleteButton: null,
  init: function (item, params = this.params) {
    console.log(params);
    this.wrapper = item;
    this.searchResult = this.wrapper.querySelector(params.searchResult);
    this.searchButton = this.wrapper.querySelector(params.searchButton);
    this.searchCompleteButton = this.wrapper.querySelector(params.searchCompleteButton);
    this.removeButtons = this.wrapper.querySelectorAll(params.removeButton);

    for (let removeButton of this.removeButtons) {
      removeButton.addEventListener("click", this.deleteItem.bind(this));
    }
    this.searchButton.addEventListener("click", this.searchBike.bind(this));
    this.searchCompleteButton.addEventListener("click", this.completeSearch.bind(this));
  },
  deleteItem: function (e) {
    const item = e.target.closest(this.params.item);
    item.remove();
  },
  completeSearch: function () {
    this.wrapper.classList.remove(this.params.wrapperEditable);
  },
  searchBike: async function (e) {
    console.log(this);

    const item = this.wrapper;
    item.classList.add(editMode.params.wrapperEditable);
    searchResult = this.searchResult;

    e.preventDefault();
    let request = await fetch("ajax/search.html");
    if (request.status == 200) {
      let html = await request.text();
      searchResult.innerHTML = html;
    }
  },
  save: async function (e) {

  }
}

editMode.editButtons = document.querySelectorAll(editMode.params.editButton);
for (let btn of editMode.editButtons) {
  btn.addEventListener("click", editOrder);
}

async function editOrder(e) {
  //влючить реджим редактирования
  e.preventDefault();
  let request = await fetch("ajax/admin.html");
  if (request.status == 200) {
    let html = await request.text();
    const item = e.target.closest(editMode.params.wrapper);
    item.innerHTML = html;
    // reinitCustomSelect(item);
    editMode.init(item);
  }
}

function reinitCustomSelect(wrapper) {
  const selectToUpdate = wrapper.querySelectorAll(".chosen-select");
  $(selectToUpdate).chosen({
    disable_search: true,
    width: "100%",
  });
}

// перенести js-item-container на родителя (селекты тоже надо захватить)