import {Component, Input, OnInit} from '@angular/core';
import { ProjectObject } from "../../../model/project-object";
import { ActivatedRoute } from "@angular/router";

@Component({
  selector: 'app-project-detail',
  templateUrl: './project-detail.component.html',
  styleUrls: ['./project-detail.component.css']
})
export class ProjectDetailComponent implements OnInit {

  project: ProjectObject;

  constructor(private route: ActivatedRoute) { }

  ngOnInit(): void {
    this.route.queryParams.subscribe((params) => {
      this.project = ProjectObject.getProjectByName(params.name);
    });
  }

}
