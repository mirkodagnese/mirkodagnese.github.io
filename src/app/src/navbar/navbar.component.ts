import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent implements OnInit {

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

  ngOnInit(): void {
    this.checkCurrentPath();
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
