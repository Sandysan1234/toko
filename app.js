// const jml_angkot = 10;
// const angkot_beroperasi = 6;
// let noangkot = 1;

// for (let noangkot = 1; noangkot <= jml_angkot; noangkot++) {
//     if (noangkot<= angkot_beroperasi && noangkot!=5 ) {
//         console.log(`Angkot No. ${noangkot} beroperasi dengan baik`);
//     }else if(noangkot== 8 || noangkot ==10 ||noangkot==5){
//         console.log(`Angkot No. ${noangkot} sedang lembur`);
//     // }else if(noangkot== 10){
//     //     console.log(`angkot No. ${noangkot} sedang lembur`);
//     }else{
//         console.log(`Angkot No. ${noangkot} sedang diperbaiki`);
//     }
// }

// 1 1 2 3 5 8 13 21 
//  let a = 1

//  let b = a + 1
//  let c = b +a 
//  let d = c +b

// console.log(d);
 

// function fibonaci() {
//     return fibonaci()
// }

// let bil = 1

// let arr = ['rizky','rahmahdian','sandy'];

// for (let i = 0; i < arr.length; i++) {
    //     console.log(arr[i]);    
    // }
    
    
// let arr = ['rizky','rahmahdian','sandy'];

// console.log(arr.join(' - '));
// arr.push('semb')
// console.log(arr.join(' - '));
// arr.pop('semb')
// console.log(arr.join(' - '));

// arr.unshift('sandika');
// console.log(arr.join(' - '));
// arr.shift();
// console.log(arr.join(' - '));

// function hitungLuasSegitiga(alas, tinggi) {
    
//     return 0.5 * alas * tinggi
// }

// console.log(hitungLuasSegitiga(10, 5)); 

function ganjilgenap(angka) {
    if (angka%2==0) {
        console.log('bilangan genap');
    }else if(angka%2==1){
        console.log('bilangan ganjil');
        
    }else{
        console.log('angka yang anda masukkan tidak sesuai');   
    }
}

console.log(ganjilgenap(5));
console.log(ganjilgenap(10));
