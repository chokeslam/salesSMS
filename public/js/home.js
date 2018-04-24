$(document).ready(function() {

	if (location.pathname == '/Sales/public/home') {

		$('#all').addClass('active');
	}

	if (location.pathname == '/Sales/public/home/paid') {

		$('#paid').addClass('active');
	}

	if (location.pathname == '/Sales/public/home/unpaid') {

		$('#unpaid').addClass('active');
	}

	if (location.pathname == '/Sales/public/home/sign-up') {

		$('#signup').addClass('active');
	}

	if (location.pathname == '/Sales/public/Transfer') {

		$('#Transfer').addClass('active');
	}

	if (location.pathname == '/Sales/public/Engineering') {

		$('#Engineering').addClass('active');
	}

	if (location.pathname == '/Sales/public/Business') {

		$('#Business').addClass('active');
	}

	$('#allcheck').click(function() {
	
		if ($('#allcheck').prop("checked")) {

			 $('.check').prop("checked", true);

		}else{

			 $('.check').prop("checked", false);
		}

	});

	$('input:submit').click(function(){

		$('#phone').val( get_value());

		$('#url').val(location.href);

		if(!$('#phone').val()){

			alert('沒有勾選傳送對象');

			return false;
		}
		if (!$("textarea").val()) {

			alert('沒有輸入訊息內容');

			return false;

		}

	});

	var phone = "";
	
	function get_value(){
		
		$("table input:checkbox:checked").each(function(index,value){
			
			if($(this).prop("checked") ==true){
			
				phone =phone+$(this).val()+",";

				//phone = phone;
			}else{
				
				phone = phone.replace("/"+$(this).val()+"/", "phone");
			}
			
		});
		
		return phone.slice(0,-1);
	};

	for(i=1;i< 8;i++){

		var title = $('table tfoot th').eq(i).text();

		$('#tables tfoot th').eq(i).html('<input type="text" placeholder="搜尋 '+title+'"style="width: 100%;text-align:center" />');

	}

	//datatables 初始化 設定
	var table = $('#tables').DataTable( {

        	"oLanguage" : {
        	
                	"sLengthMenu": "每頁顯示 _MENU_ 筆紀錄",
                
                	"sZeroRecords": "抱歉， 没有找到",
                
                	"sInfo": "從 _START_ 到 _END_ /共 _TOTAL_ 筆資料",
                
                	"sInfoEmpty": "沒有資料",
                
                	"sInfoFiltered": "(從 _MAX_ 筆資料中查詢)",
                
                	"sZeroRecords": "沒有符合的資料",
                
                 	"sSearch": "名稱:",
                 
                	"oPaginate": {
                	
                		"sFirst": "首页",
                		
                		"sPrevious": "上一頁",
                		
                		"sNext": "下一頁"         
                }           
       		},

		dom:'Brt<"bottom"i>',
		"ordering": false,
		"autoWidth": false,

		"columnDefs": [
			{ "width": "1%", "targets": 0 },
			{ "width": "10%", "targets": 1 },
			{ "width": "5%", "targets": 2 },
			{ "width": "10%", "targets": 3 },
			{ "width": "10%", "targets": 4 },
			{ "width": "5%", "targets": 5 },
			{ "width": "10%", "targets": 6 },
			{ "width": "10%", "targets": 7 },
			{ "width": "5%", "targets": 8 },
			{ "width": "5%", "targets": 9 }

		],

		"scrollY":        "300px",

		"scrollX": true,

		"scrollCollapse": true,

		"paging":         false,

	} );


	//動態搜尋
	var table = $('#tables').DataTable();

	table.columns().every( function () {

		var that = this;
	 
		$( 'input', this.footer() ).on( 'keyup change', function () {

			if ( that.search() !== this.value ) {

				that.search( this.value ).draw();

			}

		} );
        		
	} );

	//繼續新增 將 action 更改為另一路徑
	$('#continue').click(function(){

		$('form').attr('action','create/continue');

	});


});