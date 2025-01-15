import "./bootstrap";
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menuToggle");
    const closeMenu = document.getElementById("closeMenu");
    const navLinks = document.getElementById("navLinks");

    menuToggle.addEventListener("click", () => {
        navLinks.classList.add("active");
    });

    closeMenu.addEventListener("click", () => {
        navLinks.classList.remove("active");
    });
});

document
    .getElementById("cartForm")
    .addEventListener("submit", function (event) {
        event.preventDefault();

        const productName = document.getElementById("productName").value;
        const productPrice = parseFloat(
            document.getElementById("productPrice").value
        );
        const productQuantity = parseInt(
            document.getElementById("productQuantity").value
        );
        const productDescription =
            document.getElementById("productDescription").value;

        const subtotal = (productPrice * productQuantity).toFixed(2);

        const cartTable = document
            .getElementById("cartTable")
            .getElementsByTagName("tbody")[0];
        const newRow = cartTable.insertRow();

        newRow.innerHTML = `
        <td>${productName}</td>
        <td>$${productPrice.toFixed(2)}</td>
        <td>${productQuantity}</td>
        <td>$${subtotal}</td>
        <td><button class="remove-btn">Remove</button></td>
    `;

        updateTotal();

        newRow
            .querySelector(".remove-btn")
            .addEventListener("click", function () {
                this.closest("tr").remove();
                updateTotal();
            });

        document.getElementById("cartForm").reset();
    });

function updateTotal() {
    const cartTable = document
        .getElementById("cartTable")
        .getElementsByTagName("tbody")[0];
    let total = 0;

    for (let row of cartTable.rows) {
        total += parseFloat(row.cells[3].textContent.replace("$", ""));
    }

    document.getElementById("cartTotal").textContent = `$${total.toFixed(2)}`;
}
