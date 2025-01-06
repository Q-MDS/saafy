const CUSTOMER = 
{
	get_write_review: function()
    {
        let formData = { };
		
        let phpUrl = baseUrl + "customer/write_review";
        
        sendData(phpUrl, formData)
        .then(result => { this.set_form(result); });
    },

	get_report_business: function()
    {
        let formData = { };
		
        let phpUrl = baseUrl + "customer/report_business";
        
        sendData(phpUrl, formData)
        .then(result => { this.set_form(result); });
    },

	set_form: function(ajaxData)
    {
        showFormOverlay();
        
        let formOverlay = document.getElementById("form_overlay");
        formOverlay.innerHTML = "";
        formOverlay.innerHTML = ajaxData;
    },
}
