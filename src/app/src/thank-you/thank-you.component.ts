import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-thank-you',
  templateUrl: './thank-you.component.html',
  styleUrls: ['./thank-you.component.css']
})
export class ThankYouComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    this.setup();
    setTimeout(() => {
      document.location.href = "/";
    }, 1500);
  }

  setup(): void {
    let footerHeight = document.getElementsByClassName("text-footer")[0].clientHeight;
    let navbarMarginBottom = window.innerWidth > 767 ? 150 : 65;
    let thanksContainer = document.getElementById("thanks-container");
    let calc = window.innerHeight - footerHeight - (navbarMarginBottom*2);
    console.log(calc);
    thanksContainer.style.minHeight = calc + "px";
    thanksContainer.style.marginBottom = navbarMarginBottom + "px";
  }

}
