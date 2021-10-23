
jQuery(document).ready(function(){

	"use strict";

	

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

      
    if($.fn.animatedHeadline){
        $('.typed').animatedHeadline({
            animationType: 'clip'
        });
    }
	

    $('#email-field').click(function() {
        $(this).addClass("active");
        $(this).attr('placeholder','Email Address...');
       
    });

	const portfolio = document.querySelector('#portfolio');

	if(portfolio){
		$('.filtr-container').filterizr();
	}

	

	var filMenu= $('.filter_menu li');
    filMenu.on('click',function() {
        filMenu.removeClass('active');
        $(this).addClass('active');
    });

	$('.venobox').venobox({
        spinner: 'double-bounce'
    });


	


	// jQuery v3.3.1 is supported
// const frame = $('.frame');
// const dot = $('.dot');
// const dotMove = function(e){
// 	dot.css({left: e.offsetX +`px`, top: e.offsetY +`px`})
	
// }

// frame.on("mousemove", dotMove);


	
	// here all ready functions
	
	tokyo_tm_menu();
	tokyo_tm_modalbox_news();
	tokyo_tm_modalbox_about();
	// tokyo_tm_modalbox_portfolio();
	tokyo_tm_my_progress();
	tokyo_tm_mycounter();
	// tokyo_tm_projects();
	// tokyo_tm_portfolio();
	tokyo_tm_cursor();
	// tokyo_tm_imgtosvg();
	// tokyo_tm_popup();
	// tokyo_tm_data_images();
	// tokyo_tm_contact_form();
	// tokyo_tm_owl_carousel();
	
	// jQuery(window).load('body', function(){
	// 	tokyo_tm_my_load();
	// });
	
});

function tokyo_tm_cursor(){
    "use strict";
	
	var myCursor	= jQuery('.mouse-cursor');
	
	if(myCursor.length){
		if ($("body")) {
        const e = document.querySelector(".cursor-inner"),
            t = document.querySelector(".cursor-outer");
        let n, i = 0,
            o = !1;
        window.onmousemove = function (s) {
            o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
        }, $("body").on("mouseenter", "a, .cursor-pointer", function () {
            e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
        }), $("body").on("mouseleave", "a, .cursor-pointer", function () {
            $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
        }), e.style.visibility = "visible", t.style.visibility = "visible"
    }
	}
};

// -----------------------------------------------------
// ---------------   FUNCTIONS    ----------------------
// -----------------------------------------------------

// -------------------------------------------------
// --------------------  MENU  ---------------------
// -------------------------------------------------

function tokyo_tm_menu(){
	
	"use strict";
	
	var list	 = jQuery('.tokyo_tm_all_wrap .leftpart .menu ul li,.tokyo_tm_mobile_menu .menu ul li');
	var vContent = jQuery('.tokyo_tm_all_wrap');
	var vSection = jQuery('.tokyo_tm_section');
	var dropdown = jQuery('.dropdown-menu li')
	
	list.on('click',function(){
		var element = jQuery(this);
		var myHref	= element.find('a').attr('href');
		if(!element.hasClass('active')){
			list.removeClass('active');
			element.addClass('active');
			vSection.removeClass('active');
			vContent.find(myHref).addClass('active').animate({ scrollTop: 0 });
			dropdown.find(myHref).addClass('active');
		}
	});
}

// -------------------------------------------------
// -------------  MODALBOX NEWS  -------------------
// -------------------------------------------------

function tokyo_tm_modalbox_news(){
	
	"use strict";
	
	var modalBox	= jQuery('.tokyo_tm_modalbox');
	var list 		= jQuery('.tokyo_tm_news ul li');
	var closePopup	= modalBox.find('.close');
	
	list.each(function(){
		var element 	= jQuery(this);
		var details 	= element.find('.list_inner').html();
		var buttons 	= element.find('.details .title a,.tokyo_tm_full_link,.tokyo_tm_read_more a');
		var mainImage	= element.find('.main');
		var imgData		= mainImage.data('img-url');
		var title		= element.find('.title');
		var titleHref	= element.find('.title a').html();
		buttons.on('click',function(){
			jQuery('body').addClass('modal');
			modalBox.addClass('opened');
			modalBox.find('.description_wrap').html(details);
			mainImage = modalBox.find('.main');
			mainImage.css({backgroundImage: 'url('+imgData+')'});
			title = modalBox.find('.title');
			title.html(titleHref);
			tokyo_tm_imgtosvg();
			return false;
		});
	});
	closePopup.on('click',function(){
		modalBox.removeClass('opened');
		modalBox.find('.description_wrap').html('');
		jQuery('body').removeClass('modal');
		return false;
	});
}

// -------------------------------------------------
// -------------  MODALBOX ABOUT  ------------------
// -------------------------------------------------

function tokyo_tm_modalbox_about(){
	
	"use strict";
	
	var modalBox	= jQuery('.tokyo_tm_modalbox_about');
	var opener		= jQuery('.tokyo_tm_about .tokyo_tm_button a');
	var closer		= modalBox.find('.close');
	
	opener.on('click',function(){
		modalBox.addClass('opened');
		tokyo_tm_my_progress();
		tokyo_tm_mycounter();
		return false;
	});
	closer.on('click',function(){
		modalBox.removeClass('opened');
		return false;
	});
}



// -------------------------------------------------
// -------------  MODALBOX PORTFOLIO  --------------
// -------------------------------------------------

// function tokyo_tm_modalbox_portfolio(){
	
// 	"use strict";
	
// 	var modalBox	= jQuery('.tokyo_tm_modalbox');
// 	var button		= jQuery('.tokyo_tm_portfolio .popup_info');
	
// 	button.on('click',function(){
// 		var element 	= jQuery(this);
// 		var parent		= element.closest('li');
// 		var details 	= parent.find('.details_all_wrap').html();
// 		var title 		= parent.find('.entry').data('title');
// 		var category 	= parent.find('.entry').data('category');
		
// 		modalBox.addClass('opened');
// 		modalBox.find('.description_wrap').html(details);
// 		modalBox.find('.top_image').html(parent.find('.popup_info').html());
// 		modalBox.find('.portfolio_main_title').html('<h3>'+title+'</h3>'+'<span>'+category+'</span>');
// 		tokyo_tm_popup();
// 	});
// }

// -------------------------------------------------
// -----------------    PORTFOLIO    ---------------
// -------------------------------------------------

function tokyo_tm_projects() {
	
	"use strict";
	
	jQuery('.tokyo_tm_portfolio_animation_wrap').each(function() {
		jQuery(this).on('mouseenter', function() {
			if (jQuery(this).data('title')) {
				jQuery('.tokyo_tm_portfolio_titles').html(jQuery(this).data('title') + '<span class="work__cat">' + jQuery(this).data('category') + '</span>');
				jQuery('.tokyo_tm_portfolio_titles').addClass('visible');
			}

			jQuery(document).on('mousemove', function(e) {
				jQuery('.tokyo_tm_portfolio_titles').css({
					left: e.clientX - 10,
					top: e.clientY + 25
				});
			});
		}).on('mouseleave', function() {
			jQuery('.tokyo_tm_portfolio_titles').removeClass('visible');
		});
	});
}

// filterable 

// function tokyo_tm_portfolio(){

// 	"use strict";

// 	if(jQuery().isotope) {

// 		// Needed variables
// 		var list 		 = jQuery('.tokyo_tm_portfolio .portfolio_list');
// 		var filter		 = jQuery('.tokyo_tm_portfolio .portfolio_filter ul');

// 		if(filter.length){
// 			// Isotope Filter 
// 			filter.find('a').on('click', function(){
// 				var selector = jQuery(this).attr('data-filter');
// 				list.isotope({ 
// 					filter				: selector,
// 					animationOptions	: {
// 						duration			: 750,
// 						easing				: 'linear',
// 						queue				: false
// 					},
					
				
					
					
// 				});
// 				return false;
// 			});	

// 			// Change active element class
// 			filter.find('a').on('click', function() {
// 				filter.find('a').removeClass('current');
// 				jQuery(this).addClass('current');
// 				return false;
// 			});	
// 		}
// 	}
// }

// -------------------------------------------------
// -------------  PROGRESS BAR  --------------------
// -------------------------------------------------

function tokyo_tm_my_progress(){
	"use strict";
	
	jQuery('.tokyo_progress .bar_in').css({width:'0px'});
	jQuery('.tokyo_progress .bar').removeClass('open');
	function tdProgress(container){
		container.find('.progress_inner').each(function() {
			var progress 		= jQuery(this);
			var pValue 			= parseInt(progress.data('value'), 10);
			var pColor			= progress.data('color');
			var pBarWrap 		= progress.find('.bar');
			var pBar 			= progress.find('.bar_in');
			pBar.css({width:pValue+'%', backgroundColor:pColor});
			setTimeout(function(){pBarWrap.addClass('open');});
		});
	}
	jQuery('.tokyo_progress').each(function() {
		var pWrap 			= jQuery(this);
		pWrap.waypoint({handler: function(){tdProgress(pWrap);},offset:'90%'});	
	});
}

// -----------------------------------------------------
// ---------------   PRELOADER   -----------------------
// -----------------------------------------------------

// function tokyo_tm_preloader(){
	
// 	"use strict";
	
// 	var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
// 	var preloader = $('#preloader');
	
// 	if (!isMobile) {
// 		setTimeout(function() {
// 			preloader.addClass('preloaded');
// 		}, 800);
// 		setTimeout(function() {
// 			preloader.remove();
// 		}, 2000);

// 	} else {
// 		preloader.remove();
// 	}
// }

// -----------------------------------------------------
// -------------------    COUNTER    -------------------
// -----------------------------------------------------

function tokyo_tm_mycounter(){
	
	"use strict";
	
	jQuery('.tokyo_tm_counter').removeClass('stop');
	
	jQuery('.tokyo_tm_counter').each(function() {

	var el = jQuery(this);
		el.waypoint({
			handler: function(){

				if(!el.hasClass('stop')){
					el.addClass('stop').countTo({
						refreshInterval: 50,
						formatter: function (value, options) {
							return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
						},	
					});
				}
			},offset:'95%'	
		});
	});
}

// -----------------------------------------------------
// -----------------   MY LOAD    ----------------------
// -----------------------------------------------------

// function tokyo_tm_my_load(){
	
// 	"use strict";
	
// 	var speed	= 500;
// 	setTimeout(function(){tokyo_tm_preloader();},speed);
// }

// -----------------------------------------------------
// ------------------   CURSOR    ----------------------
// -----------------------------------------------------



// -----------------------------------------------------
// ---------------    IMAGE TO SVG    ------------------
// -----------------------------------------------------

// function tokyo_tm_imgtosvg(){
	
// 	"use strict";
	
// 	jQuery('img.svg').each(function(){
		
// 		var jQueryimg 		= jQuery(this);
// 		var imgClass		= jQueryimg.attr('class');
// 		var imgURL			= jQueryimg.attr('src');

// 		jQuery.get(imgURL, function(data) {
// 			// Get the SVG tag, ignore the rest
// 			var jQuerysvg = jQuery(data).find('svg');

// 			// Add replaced image's classes to the new SVG
// 			if(typeof imgClass !== 'undefined') {
// 				jQuerysvg = jQuerysvg.attr('class', imgClass+' replaced-svg');
// 			}

// 			// Remove any invalid XML tags as per http://validator.w3.org
// 			jQuerysvg = jQuerysvg.removeAttr('xmlns:a');

// 			// Replace image with new SVG
// 			jQueryimg.replaceWith(jQuerysvg);

// 		}, 'xml');

// 	});
// }

// -----------------------------------------------------
// --------------------   POPUP    ---------------------
// -----------------------------------------------------

function tokyo_tm_popup(){
	
	"use strict";

	jQuery('.gallery_zoom').each(function() { // the containers for all your galleries
		jQuery(this).magnificPopup({
			delegate: 'a.zoom', // the selector for gallery item
			type: 'image',
			gallery: {
			  enabled:true
			},
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});

	});
	
	

}

// -----------------------------------------------------
// ---------------   DATA IMAGES    --------------------
// -----------------------------------------------------

function tokyo_tm_data_images(){
	
	"use strict";
	
	var data			= jQuery('*[data-img-url]');
	
	data.each(function(){
		var element			= jQuery(this);
		var url				= element.data('img-url');
		element.css({backgroundImage: 'url('+url+')'});
	});
}

// -----------------------------------------------------
// ----------------    CONTACT FORM    -----------------
// -----------------------------------------------------

// function tokyo_tm_contact_form(){
	
// 	"use strict";
	
// 	jQuery(".contact_form #send_message").on('click', function(){
		
// 		var name 		= jQuery(".contact_form #name").val();
// 		var email 		= jQuery(".contact_form #email").val();
// 		var message 	= jQuery(".contact_form #message").val();
// 		var subject 	= jQuery(".contact_form #subject").val();
// 		var success     = jQuery(".contact_form .returnmessage").data('success');
	
// 		jQuery(".contact_form .returnmessage").empty(); //To empty previous error/success message.
// 		//checking for blank fields	
// 		if(name===''||email===''||message===''){
			
// 			jQuery('div.empty_notice').slideDown(500).delay(2000).slideUp(500);
// 		}
// 		else{
// 			// Returns successful data submission message when the entered information is stored in database.
// 			jQuery.post("modal/contact.php",{ ajax_name: name, ajax_email: email, ajax_message:message, ajax_subject: subject}, function(data) {
				
// 				jQuery(".contact_form .returnmessage").append(data);//Append returned message to message paragraph
				
				
// 				if(jQuery(".contact_form .returnmessage span.contact_error").length){
// 					jQuery(".contact_form .returnmessage").slideDown(500).delay(2000).slideUp(500);		
// 				}else{
// 					jQuery(".contact_form .returnmessage").append("<span class='contact_success'>"+ success +"</span>");
// 					jQuery(".contact_form .returnmessage").slideDown(500).delay(4000).slideUp(500);
// 				}
				
// 				if(data===""){
// 					jQuery("#contact_form")[0].reset();//To reset form fields on success
// 				}
				
// 			});
// 		}
// 		return false; 
// 	});
// }

// -----------------------------------------------------
// ----------------    OWL CAROUSEL    -----------------
// -----------------------------------------------------

// function tokyo_tm_owl_carousel(){

// 	"use strict";
	
// 	var carousel			= jQuery('.partners .owl-carousel');
	
// 	var rtlMode	= false;

// 	if(jQuery('body').hasClass('rtl')){
// 		rtlMode = 'true';
// 	}

// 	carousel.owlCarousel({
// 		loop: true,
// 		items: 4,
// 		lazyLoad: false,
// 		margin: 50,
// 		autoplay: true,
// 		autoplayTimeout: 7000,
// 		rtl: rtlMode,
// 		dots: true,
// 		nav: false,
// 		navSpeed: true,
// 		responsive:{
// 			0:{items:1},
// 			480:{items:2},
// 			768:{items:3},
// 			1040:{items:3},
// 			1200:{items:3},
// 			1600:{items:4},
// 			1920:{items:4}
// 		}
// 	});
// 	tokyo_tm_imgtosvg();


    

//The Function Below To Encrypt Text
const encrypt = (text) => {
	const passphrase = "My Secret Passphrase";
	return CryptoJS.AES.encrypt(text, passphrase).toString();
  };
  //The Function Below To Decrypt Text
  const decrypt = (ciphertext) => {
	const passphrase = "My Secret Passphrase";
	const bytes = CryptoJS.AES.decrypt(ciphertext, passphrase);
	const originalText = bytes.toString(CryptoJS.enc.Utf8);
	return originalText;
  };




	$('#homes-data').on('submit', function(e){
		e.preventDefault();

		var form = this;

		$.ajax({
			url:$(form).attr('action'),
            method:$(form).attr('method'),
			data:new FormData(form),
			processData:false,
			dataType:'json',
			contentType:false,
			beforeSend:function(){
				$(form).find('span.error-text').text('');
			},
			success:function(data){
				if(data.code == 0){
					$.each(data.error, function(prefix,val){
						$(form).find('span.'+prefix+'_error').text(val[0]);
					});
				}else{
					$(form)[0].reset();
					$(".hide").modal('hide');
					var oTable = $('#myTable').dataTable();
					oTable.fnDraw(false)
				}
			}
		})
	})



	
		$('#myTable').DataTable({
			processing: true,
			serverSide: true,
			"ajax":{
				"url": "/homeDdata",
				"dataType": "json",
				"type": "GET",
				
			  },
			  "order": [[ 0, "desc" ]],
			columns: [
				{ data: 'DT_RowIndex' ,orderable: false, searchable: false},
			   { data: 'image' },
			   { data: 'name' },
			   { data: 'titleone' },
			   {data: 'status', name: 'status', orderable: false, searchable: false},
			   {data: 'action', name: 'action', orderable: false, searchable: false},
			]
		 });


		 $(document).on('click', '.editbtn', function (e) {
            e.preventDefault();

			$('#editModal').modal('show');

			var home_id = $(this).val();

			$.ajax({
                type: "GET",
                url: "/edit-homes/" + home_id,
                success: function (response) {
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('#editModal').modal('hide');
                    } else {
                        // console.log(response.student.name);
                        $('#name').val(response.student.name);
                        $('#titleone').val(response.student.titleone);
                        $('#titletwo').val(response.student.titletwo);
                        $('#titlethree').val(response.student.titlethree);
						$('#descriptions').val(response.student.descriptions);
                        $('#link1').val(response.student.link1);
                        $('#link2').val(response.student.link2);
                        $('#link3').val(response.student.link3);                 
                        $('#link4').val(response.student.link4);                 
                        $('#link5').val(response.student.link5);   
						//console.log(response.student.image);                   
                        $('#homesid').val(home_id);
                    }
                }
            });
		})


		$(document).on('submit', '#homesdataStore', function (e) {
            e.preventDefault();

			var id = $('#homesid').val();
			let formData = new FormData($('#homesdataStore')[0]);

			console.log(formData);

            var data = {
                'name': $('#name').val(),
                'titleone': $('#titleone').val(),
                'titletwo': $('#titletwo').val(),
                'titlethree': $('#titlethree').val(),
				'descriptions': $('#descriptions').val(),
                'link1': $('#link1').val(),
                'link2': $('#link2').val(),
                'link3': $('#link3').val(),
				'link4': $('#link4').val(),
                'link5': $('#link5').val(),
                'image': $('#image').val(),
            }

            $.ajax({
                type: "Post",
                url: "/edit-homes-store/" + id,
                data: formData,
                processData:false,
				dataType:'json',
				contentType:false,
                success: function (response) {
                    // console.log(response);
                    if (response.status == 400) {
                        $('#update_msgList').html("");
                        $('#update_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_value) {
                            $('#update_msgList').append('<li>' + err_value +
                                '</li>');
                        });
                        $('.update_student').text('Update');
                    } else {
                        // $('#update_msgList').html("");

                        // $('#success_message').addClass('alert alert-success');
                        // $('#success_message').text(response.message);
                        // $('#editModal').find('input').val('');
                        // $('.update_student').text('Update');
                        $('#editModal').modal('hide');
                        var oTable = $('#myTable').dataTable();
						oTable.fnDraw(false)
                    }
                }
            });

        });
	
		$(document).on('click', '.deletebtn', function () {
            var id =  $(this).val();
			var encryptText = encrypt(id); 

			

			// console.log(decryptText);
			
            $('#DeleteModal').modal('show');
			$('.closed').modal('hide');
            $('#deleteing_id').val(encryptText);
        });

	
		$(document).on('click', '.delete_student', function (e) {
            e.preventDefault();

			var ids = $('#deleteing_id').val();

			let home_id = decrypt(ids);

	

         console.log(home_id);

            $.ajax({
                type: "Post",
                url: "/homes-delete/" + home_id,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_student').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_student').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        // fetchstudent();
						var oTable = $('#myTable').dataTable();
						oTable.fnDraw(false)
                    }
                }
            });
        });

    
		
		$(document).on('click', '.save_data', function (e){
			e.preventDefault();
	
			var data = {
                'name': $('#name').val(),
                'email': $('.email').val(),
                'comment': $('.comment').val(),
				
            }
	
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			$.ajax({
				type: "POST",
                url: "/conatctstore",
				data:data,
				dataType:'json',
				
				success:function(response){
					if (response.status == 400) {
                        $('#save_msgList').html("");
                        $('#save_msgList').addClass('alert alert-danger');
                        $.each(response.errors, function (key, err_value) {
                        $('#save_msgList').append('<li>' + err_value + '</li>');
                        });
                        $('.add_student').text('Save');
                    } else {
                        $('#ajax-alert').addClass('alert-sucess').show(function(){
							$(this).html(response.success);
						});
						
                        $('#contact').find('input').val('');
                        $('#contact').find('textarea').val('');

                        $('.add_student').text('Save');
					}
				}
			})
		})



		$('#myTablecontact').DataTable({
			processing: true,
			serverSide: true,
			"ajax":{
				"url": "/contactDdata",
				"dataType": "json",
				"type": "GET",
				
			  },
			  "order": [[ 0, "desc" ]],
			columns: [
				{ data: 'DT_RowIndex' ,orderable: false, searchable: false},
			   { data: 'name' },
			   { data: 'email' },
			   {data: 'status', name: 'status', orderable: false, searchable: false},
			   {data: 'action', name: 'action', orderable: false, searchable: false},
			]
		 });


		 $(document).on('click', '.deletebtn', function () {
            var id =  $(this).val();
			var encryptText = encrypt(id); 

			

			// console.log(decryptText);
			
            $('#DeleteModal').modal('show');
			$('.closed').modal('hide');
            $('#deleteing_id').val(encryptText);
        });

	
		$(document).on('click', '.delete_student', function (e) {
            e.preventDefault();

			var ids = $('#deleteing_id').val();

			let contact_id = decrypt(ids);

	

        //  console.log(home_id);

            $.ajax({
                type: "Post",
                url: "/contact-delete/" + contact_id,
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    if (response.status == 404) {
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_student').text('Yes Delete');
                    } else {
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success');
                        $('#success_message').text(response.message);
                        $('.delete_student').text('Yes Delete');
                        $('#DeleteModal').modal('hide');
                        // fetchstudent();
						var oTable = $('#myTablecontact').dataTable();
						oTable.fnDraw(false)
                    }
                }
            });
        });

		$('#suscribe').on('submit', function(e){
		e.preventDefault();

		var form = this;

		$.ajax({
			url:$(form).attr('action'),
            method:$(form).attr('method'),
			data:new FormData(form),
			processData:false,
			dataType:'json',
			contentType:false,
			beforeSend:function(){
				$(form).find('span.error-text').text('');
			},
			success:function(data){
				if(data.code == 0){
					$.each(data.error, function(prefix,val){
						$(form).find('span.'+prefix+'_error').text(val[0]);
					});
				}else{
					$(form)[0].reset();
					$('#ajax-alert').addClass('alert-sucess').show(function(){
						$(this).html(data.message);
					});
				}
			}
		})
	})


	$(document).on('click', '.viewbtn', function (e) {
		e.preventDefault();

		$('#viewAbout').modal('show');

		var home_id = $(this).val();

		$.ajax({
			type: "GET",
			url: "/contactView/" + home_id,
			success: function (response) {
				if (response.status == 404) {
					$('#editModal').modal('hide');
				} else {
					$('.modal-body').html('<h2> ' + response.student.name +' </h2></h3>' + response.student.email +'</h3 <br><p>' + response.student.comment +'</p>');
					var oTable = $('#myTablecontact').dataTable();
						oTable.fnDraw(false)
					// $('.modal-body').html("");

					// console.log(response.student.name)
                   

				}
			}
		});
	})


   
