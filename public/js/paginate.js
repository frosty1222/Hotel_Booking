// JSページネーション
var dataTableInit = {
	columnDefs: [ { orderable: false, targets: [ 1 ] } ],
	pageLength: 15,
	sorting: [ [0, "DESC"] ],
	oLanguage: {
		sLengthMenu : "表示　_MENU_　件",
		oPaginate : {
			sNext : "›",
			sPrevious : "‹"
		},
		sInfo : "_TOTAL_ 件中 _START_件から_END_件 を表示しています",
		sSearch : "検索 ",
		sZeroRecords : "表示するデータがありません",
		sInfoEmpty : "0 件中 0件 を表示しています",
		sInfoFiltered : "全 _MAX_ 件から絞り込み"
	},
	searching: false,
	lengthChange: false,
	ordering: false,
	info: false,
	sDom: '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"ip>>'
}
