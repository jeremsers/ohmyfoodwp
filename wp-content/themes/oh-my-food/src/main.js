const infoTab = document.querySelector(".info-tab");
const menuTab = document.querySelector(".menu-tab");
const infoTabContainer = document.querySelector(".info-tab-container");
const menuTabContainer = document.querySelector(".menu-tab-container");

// Tab functionality
if (infoTab && menuTab) {
	infoTab.addEventListener("click", () => {
		infoTab.classList.add("active");
		infoTab.classList.remove("inactive");
		menuTab.classList.add("inactive");
		menuTab.classList.remove("active");
		infoTabContainer.classList.add("active-tab");
		menuTabContainer.classList.add("inactive-tab");
		infoTabContainer.classList.remove("inactive-tab");
		menuTabContainer.classList.remove("active-tab");
	});

	menuTab.addEventListener("click", () => {
		menuTab.classList.add("active");
		menuTab.classList.remove("inactive");
		infoTab.classList.add("inactive");
		infoTab.classList.remove("active");
		menuTabContainer.classList.add("active-tab");
		infoTabContainer.classList.add("inactive-tab");
		menuTabContainer.classList.remove("inactive-tab");
		infoTabContainer.classList.remove("active-tab");
	});
}

//Modal functionality
const modal = document.querySelector(".modal");
const modalButton = document.querySelectorAll(".restaurant-button");
const closeModalButton = document.querySelector(".close-modal");

if (modal && modalButton && closeModalButton) {
	//open modal when clicking on the button
	modalButton.forEach((button) => {
		button.addEventListener("click", function () {
			modal.showModal();
		});
	});
	//close modal when clicking on the close button
	closeModalButton.addEventListener("click", function () {
		modal.close();
	});

	//close modal when clicking outside the modal content
	modal.addEventListener("click", (event) => {
		const modalContent = modal.querySelector(".modal-content");
		if (!modalContent.contains(event.target)) {
			modal.close();
		}
	});
}

//popup functionality
const popup = document.querySelector(".popup");
const closePopupButton = document.querySelector(".close-popup");

if (popup && closePopupButton) {
	document.addEventListener("DOMContentLoaded", function () {
		if (!sessionStorage.getItem("popupShown")) {
			popup.showModal();
			sessionStorage.setItem("popupShown", "true");
		}
		closePopupButton.addEventListener("click", function () {
			popup.close();
		});
		//close popup when clicking outside the popup content
		popup.addEventListener("click", (event) => {
			const popupContainer = popup.querySelector(".popup-container");
			if (!popupContainer.contains(event.target)) {
				popup.close();
			}
		});
	});
}

// Burger menu functionality
document.addEventListener("DOMContentLoaded", function () {
	const burgerMenu = document.querySelector(".burger-menu");
	const navMenu = document.querySelector(".nav-menu");
	const body = document.body;
	let resizeTimer;

	if (!burgerMenu || !navMenu) {
		return;
	}

	const closeMenu = () => {
		burgerMenu.classList.remove("active");
		navMenu.classList.remove("active");
		body.classList.remove("menu-open");
	};

	// Enable transitions initially
	navMenu.classList.add("transitions-enabled");

	burgerMenu.addEventListener("click", function () {
		// Ensure transitions are enabled for burger menu interactions
		navMenu.classList.add("transitions-enabled");

		burgerMenu.classList.toggle("active");
		navMenu.classList.toggle("active");
		body.classList.toggle("menu-open");
	});

	// Close menu when clicking on a menu item
	const menuItems = document.querySelectorAll(".nav-container .items a");
	menuItems.forEach((item) => {
		item.addEventListener("click", () => {
			navMenu.classList.add("transitions-enabled");
			closeMenu();
		});
	});

	/* // Close menu when clicking outside
	document.addEventListener("click", function (event) {
		if (
			!navMenu.contains(event.target) &&
			!burgerMenu.contains(event.target) &&
			navMenu.classList.contains("active")
		) {
			navMenu.classList.add("transitions-enabled");
			closeMenu();
		}
	}); */

	// Handle window resize - disable transitions temporarily
	window.addEventListener("resize", function () {
		// Disable transitions during resize
		navMenu.classList.remove("transitions-enabled");

		// Clear existing timer
		clearTimeout(resizeTimer);

		// Close menu if window becomes larger than mobile breakpoint
		if (window.innerWidth > 768 && navMenu.classList.contains("active")) {
			closeMenu();
		}

		// Re-enable transitions after resize is complete
		resizeTimer = setTimeout(function () {
			navMenu.classList.add("transitions-enabled");
		}, 150); // Small delay to ensure resize is complete
	});
});
