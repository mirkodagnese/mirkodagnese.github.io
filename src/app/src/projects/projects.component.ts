import { Component, OnInit } from '@angular/core';
import { ProjectObject } from '../../../model/project-object';

@Component({
  selector: 'projects-component',
  templateUrl: './projects.component.html',
  styleUrls: ['./projects.component.css']
})
export class ProjectsComponent implements OnInit {

  socials: [string, string][] = [
    ["behance-image", "https://www.behance.net/mirkodagnese"],
    ["dribble-image", "https://www.dribbble.com/mirkodagnese"],
    ["linkedin-image", "https://www.linkedin.com/in/mirkodagnese"],
    ["instagram-image", "https://www.instagram.com/mirkodagnese"],
  ];

  projects: ProjectObject[] = [];

  ngOnInit(): void {
    this.projects = ProjectObject.getProjects();
  }

}
