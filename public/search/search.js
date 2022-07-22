import {search} from "./export_search.js";
const mysearchp = document.querySelector("#mysearch");
const ul_add_lip = document.querySelector("#showlist");
const myurlp ="/lotes/create";
const searchclient = new search(myurlp,mysearchp,ul_add_lip);
searchclient.InputSearch();