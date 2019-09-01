$(document).ready(function(){
	$('select').formSelect();
	$('.sidenav').sidenav();
	$('.tooltipped').tooltip();
});

tinymce.init({selector:'#area',
                        height: 500,
                        toolbar_drawer: 'floating'});

tinymce.init({selector:'#area-1, #area-2',
                        height: 300,
                        toolbar_drawer: 'floating'});

const navDropdown = document.querySelectorAll(".dropdown-trigger");
M.Dropdown.init(navDropdown);

const collapsible = document.querySelectorAll(".collapsible");
M.Collapsible.init(collapsible);
