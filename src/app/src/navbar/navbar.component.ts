import { Component } from '@angular/core';
import {Router} from "@angular/router";

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent {

  tabs = [
    {
      link: "/projects",
      title: "Projects",
      selected: false
    },
    {
      link: "/about",
      title: "About",
      selected: false
    },
    {
      link: "/contact",
      title: "Contact",
      selected: false
    }
  ];

  collapsed = true;

  constructor(private router: Router) {
    router.events.subscribe( () => this.checkCurrentPath());
  }

  checkCurrentPath(): void {
    const currentPath = document.location.pathname === "/" ? "/projects" : document.location.pathname
    this.tabs.forEach((tab) => tab.selected = tab.link === currentPath);

  }

  tabClicked(tabIndex: number) {
    this.tabs.forEach((tab) => tab.selected = false);
    this.tabs[tabIndex].selected = true;
    this.burgerMenuClicked();
  }

  burgerMenuClicked(): void {
    this.collapsed = !this.collapsed;
  }

}
