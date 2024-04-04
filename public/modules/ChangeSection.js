
/**
 * Switch between sections by 'hiding' all sections, then revealing the one selected.
 * Additionally triggers a callback from {sectionCallbacks}, if one is available.
 * @param {string} section Names the chosen section to reveal.
 */
export const changeSection=(section)=>{ document.querySelectorAll(`[data-ui="section"]`).forEach((element)=>{ element.classList.add('d-none') }); document.querySelector(`[data-section="${section}"]`).classList.remove('d-none'); if( typeof sectionCallbacks[section] == "function" ){ sectionCallbacks[section](); }}

// Listen for section change click events, and implement changeSection() when detected.
document.querySelectorAll(`[data-trigger="change-section"]`).forEach((element)=>{ element.addEventListener('click', ()=>{ changeSection(element.dataset.sectionGoto) })})

// On load, render the 'home' section, or the section declared via the GET key 'section'
document.addEventListener('DOMContentLoaded', ()=>{ let autoload = new URLSearchParams(window.location.search).get("section"); changeSection(autoload?? 'home'); })

// A collection of callbacks that trigger whenever the key-named section is chosen by changeSection().
const sectionCallbacks = {

    home: ()=>{ console.log('home!') }

};