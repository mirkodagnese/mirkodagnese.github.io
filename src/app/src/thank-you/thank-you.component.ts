import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from "@angular/router";

@Component({
  selector: 'app-thank-you',
  templateUrl: './thank-you.component.html',
  styleUrls: ['./thank-you.component.css']
})
export class ThankYouComponent implements OnInit {

  constructor(private route: ActivatedRoute) { }

  ngOnInit(): void {
    this.setup();
    this.route.queryParams.subscribe((params) => {
      let result = JSON.parse(params.result);
      document.getElementById("result").innerText = result ? "Thank You!" : "Ops...\nPlease, try again.";
      setTimeout(() => {
        document.location.href = result ? "/" : "/contact";
      }, 1500);
    });
  }

  setup(): void {
    let footerHeight = document.getElementsByClassName("text-footer")[0].clientHeight;
    let navbarMarginBottom = window.innerWidth > 767 ? 100 : 65;
    let thanksContainer = document.getElementById("thanks-container");
    let calc = window.innerHeight - footerHeight - (navbarMarginBottom*2);
    console.log(calc);
    thanksContainer.style.minHeight = calc + "px";
    thanksContainer.style.marginBottom = navbarMarginBottom + "px";
  }

}
