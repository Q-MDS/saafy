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
	},
	customer_signup: function()
	{
		window.location.assign(baseUrl + "signup_customer/index");
	},
	customer_signup_confirm: function()
	{
		window.location.assign(baseUrl + "signup_customer/confirm");
	},
	customer_login: function()
	{
		window.location.assign(baseUrl + "login_customer/index");
	},
	customer_bookmarks: function()
	{
		window.location.assign(baseUrl + "customer/bookmarks");
	},
	customer_reviews: function()
	{
		window.location.assign(baseUrl + "customer/reviews");
	}
}
