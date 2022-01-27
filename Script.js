const name=document.getElementById('name')
const sku=document.getElementById('sku')
const price=document.getElementById('price')
const size=document.getElementById('#size')
const weight=document.getElementById('#weight')
const length=document.getElementById('#length')
const height=document.getElementById('#height')
const width=document.getElementById('#width')
const text="Please fill in required data"
const form=document.getElementById('#product_form')
const flagsize=document.getElementsByName('flagsize')
const errorElement= document.getElementById('error')

form.addEventListener('submit',(e) => {
    let messages =[]
    if(name.value ==='' || name.value == null){
        messages.push('Please fill in required data')
    }
    if(sku.value ==='' || sku.value == null ){
        messages.push('Please fill in required data')
    }
    if(price.value ==='' || price.value == null){
        messages.push('Please fill in required data')
    }
    if(size ===''){
        messages.push('Please fill in required data')
    }
    if(height ===''){
        messages.push('Please fill in required data')
    }
    if(size ===''){
        messages.push('Please fill in required data')
    }
    if(size ===''){
        messages.push('Please fill in required data')
    }
    if(size ===''){
        messages.push('Please fill in required data')
    }
    if(size ===''){
        messages.push('Please fill in required data')
    }
    if(messages.length>0){
        e.preventDefault()
        errorElement.innerText = text

    }
   

})