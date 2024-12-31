const SEARCH = 
{
	setSearch: function()
    {
		const searchTopic = document.getElementById("search_topic").value;
		const searchLocation = document.getElementById("search_location").value;

		let formData = { "search_topic": searchTopic, "search_location": searchLocation };
		
        let phpUrl = baseUrl + "search/set_search";
        
        sendData(phpUrl, formData)
        .then(result => 
		{ 
			ROUTER.search();
		});
    },

	viewResult: function(id)
	{

		let formData = { "search_view_id": id };
		
        let phpUrl = baseUrl + "search/set_result";
        
        sendData(phpUrl, formData)
        .then(result => 
		{ 
			ROUTER.search_view();
		});
	}
}
