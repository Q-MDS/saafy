const ROUTER = 
{
	search: function()
	{
		window.location.assign(baseUrl + "search");
	},
	search_view: function()
	{
		window.location.assign(baseUrl + "search/view");
	},
	login_customer: function()
	{
		window.location.assign(baseUrl + "login_customer/index");
	},
	forgot_customer: function()
	{
		window.location.assign(baseUrl + "login_customer/forgot");
	},
	forgot_confirm_customer: function()
	{
		window.location.assign(baseUrl + "login_customer/forgot_confirm");
	}
}
