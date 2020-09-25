(function (window, $, undefined) {


    $('#sendbutton').on('click', function (event) {


        var currentURL;

        chrome.tabs.query({
                'active': true,
                'windowId': chrome.windows.WINDOW_ID_CURRENT
            },
            function (tabs) {
                getCurrentURL(tabs[0].url);
            });

        function getCurrentURL(tab) {
            currentURL = tab;
        }

        var pageInfo = {
            'recipient': email,
            'link': url,
            'subject': document.title,
            'message': longMessage

        };
        var messageString = JSON.stringify(pageInfo);

        chrome.runtime.sendMessage({
            method: 'POST',
            action: 'xhttp',
            url: 'http://cloud.golca.org/resources/sendbyemail.php',
            data: messageString
        });

        console.log(pageInfo);


    });
})(window, jQuery);