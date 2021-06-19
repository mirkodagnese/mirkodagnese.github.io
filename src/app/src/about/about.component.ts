import { Component } from '@angular/core';

@Component({
  selector: 'about-component',
  templateUrl: './about.component.html',
  styleUrls: ['./about.component.css']
})
export class AboutComponent {

  getColClass(): string {
    return window.innerWidth > 768 ? 'col-md-6' : 'col-md';
  }

}
