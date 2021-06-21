import { Component, OnInit } from '@angular/core';
import { ProjectObject } from "../../../model/project-object";
import { ActivatedRoute } from "@angular/router";
import { ProjectImage } from "../../../model/project-image";

@Component({
  selector: 'app-project-detail',
  templateUrl: './project-detail.component.html',
  styleUrls: ['./project-detail.component.css']
})
export class ProjectDetailComponent implements OnInit {

  project: ProjectObject;
  regex = RegExp("([a-zA-Z0-9]+://)?([a-zA-Z0-9_]+:[a-zA-Z0-9_]+@)?([a-zA-Z0-9.-]+\\.[A-Za-z]{2,4})(:[0-9]+)?(/.*)?");

  constructor(private route: ActivatedRoute) { }

  ngOnInit(): void {
    this.route.queryParams.subscribe((params) => {
      this.project = ProjectObject.getProjectByName(params.name);
    });
  }

  getHyperLink(description: string): string {
    return description.match(this.regex)[0];
  }

}
