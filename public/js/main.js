window.onload = function(){
    
    // async function sendRequest(params = {}){
    //     const query = Object.keys(params)
    //         .map(key => `${key} = ${params[key]}`).join('&');
    //         const responce = await fetch(`api/?${query}`);
    //         return await responce.text();
    // };

    async function sendRequest(params = {}){
        const res = await fetch('api/?arabic_number=' + params.num);
        return await res.text();
    };

    async function convert(){
        const arabic_number = document.getElementById('arabic_num').value;
        const answer = await sendRequest({num: arabic_number});
        
        document.getElementById('roman_num').value = answer;
    }


    document.getElementById('convert').addEventListener('click', convert);

}