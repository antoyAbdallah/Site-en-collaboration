var ImageGachi = document.getElementById('gachi');

document.getElementById('gachi0').addEventListener('mouseover',image0);
function image0() {
	ImageGachi.style.backgroundImage="url('images/tortueDead4.jpg')";
}
var image1 = document.getElementById('gachi1');
image1.addEventListener('mouseover', toggleGachi1);
function toggleGachi1() {
	ImageGachi.style.backgroundImage = "url('images/tortueDead.jpg')";
}

document.getElementById('gachi2').addEventListener('mouseover',image2);
function image2() {
	ImageGachi.style.backgroundImage="url('images/tortueDead2.jpg')";
}
document.getElementById('gachi3').addEventListener('mouseover',image3);
function image3() {
	ImageGachi.style.backgroundImage="url('images/tortueDead3.jpg')";
}
document.getElementById('gachi4').addEventListener('mouseover',image4);
function image4() {
	ImageGachi.style.backgroundImage="url('images/dugongDead.jpg')";
}document.getElementById('gachi5').addEventListener('mouseover',image5);
function image5() {
	ImageGachi.style.backgroundImage="url('images/plage_sale.jpg')";
}document.getElementById('gachi6').addEventListener('mouseover',image6);
function image6() {
	ImageGachi.style.backgroundImage="url('images/plage_sale2.jpg')";
}
