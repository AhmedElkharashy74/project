    function request(method ,action, file, param) {
        var param = param;
        var action = action; 

        var xhr = new XMLHttpRequest();
        xhr.open(method, file , true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = xhr.responseText;
                alert(response);
            }
        };

        var data = "action=" + action + "&param=" + param;
        xhr.send(data);

    }