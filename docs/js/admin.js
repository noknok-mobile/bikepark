const editButtons = document.querySelectorAll(".js-order-edit");
for (let btn of editButtons) {
  btn.addEventListener("click", editOrder);
}

async function editOrder(e) {
  e.preventDefault();
  let request = await fetch("ajax/admin.html");
  if (request.status == 200) {
    let html = await request.text();
    const orderWrapper = e.target.closest(".js-edit-area");
    orderWrapper.innerHTML = html;
    const selectToUpdate = orderWrapper.querySelectorAll(".chosen-select");
    $(selectToUpdate).chosen({
      disable_search: true,
      width: "100%",
    });
  }
}
