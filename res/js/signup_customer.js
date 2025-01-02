const SIGNUP_CUSTOMER = 
{
	get_popup: function()
    {
        let formData = { };
		
        let phpUrl = baseUrl + "signup_customer/popup";
        
        sendData(phpUrl, formData)
        .then(result => { this.set_popup(result); });
    },

	set_popup: function(ajaxData)
    {
        showFormOverlay();
        
        let formOverlay = document.getElementById("form_overlay");
        formOverlay.innerHTML = "";
        formOverlay.innerHTML = ajaxData;
    },
}
