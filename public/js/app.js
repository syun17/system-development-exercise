const menus = {
	food: [
		{
			name: 'ねぎま',
			price: '150円',
		},
		{
			name: 'もも',
			price: '150円',
		},
		{
			name: 'せせり',
			price: '150円',
		},
	],
	drink: [
		{
			name: '生ビール',
			price: '500円',
		},
		{
			name: 'ハイボール',
			price: '450円',
		},
	],
	service: [
		{
			name: 'おしぼり',
			price: '無料',
		},
		{
			name: '取り皿',
			price: '無料',
		},
	],
	limited: [
		{
			name: '限定串',
			price: '300円',
		},
	],
};

function showMenu(category, event) {
	const menuList = document.getElementById('menu-list');

	if (!menuList || !menus[category]) {
		return;
	}

	menuList.innerHTML = '';

	menus[category].forEach((item) => {
		menuList.innerHTML += `
			<a href="#" class="item">
				<div class="item-text">
					<h2>${item.name}</h2>
					<p>${item.price}</p>
				</div>
			</a>
		`;
	});

	document.querySelectorAll('.tab').forEach((tab) => {
		tab.classList.remove('active');
	});

	if (event && event.target) {
		event.target.classList.add('active');
	}
}

window.showMenu = showMenu;

window.addEventListener('DOMContentLoaded', () => {
	const params = new URLSearchParams(window.location.search);
	const category = params.get('category') || 'food';
	const tabs = document.querySelectorAll('.tab');

	let targetTab = tabs[0];

	if (category === 'drink') {
		targetTab = tabs[1];
	}

	if (category === 'service') {
		targetTab = tabs[2];
	}

	if (category === 'limited') {
		targetTab = tabs[3];
	}

	showMenu(category, {
		target: targetTab,
	});
});