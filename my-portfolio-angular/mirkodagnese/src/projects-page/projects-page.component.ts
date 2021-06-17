import { Component, OnInit } from '@angular/core';
import {ProjectObject} from "../model/project-object";

@Component({
  selector: 'projects-page',
  templateUrl: './projects-page.component.html',
  styleUrls: ['./projects-page.component.css']
})
export class ProjectsPageComponent implements OnInit {

  socials: [string, string][] = [
    ["behance-image", "https://www.behance.net/mirkodagnese"],
    ["dribble-image", "https://www.dribbble.com/mirkodagnese"],
    ["linkedin-image", "https://www.linkedin.com/in/mirkodagnese"],
    ["instagram-image", "https://www.instagram.com/mirkodagnese"],
  ];

  projects: [ProjectObject] = [
    new ProjectObject("brainston",
                      "BRAINSTON",
                      "Logo Design & UI/UX App",
                      "Creation of a brand and related UI/UX design for crowdfunding platform using the “scale-up” technique, starting therefore from the design of the mobile version. This brand will only deal with crowdfunding in the design field, in any case embracing different sectors. The concept of the logo was born from the need to recognize one's visual presence in the market with a simple and precise brand.",
                      "../../../../img/brainston/brainston.jpg",
                      "#FD3C1DA6",
                      []
                      )
  ];

  ngOnInit(): void {

  }

}
