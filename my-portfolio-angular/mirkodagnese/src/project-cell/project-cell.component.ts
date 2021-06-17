import { Component, Input, OnInit } from '@angular/core';
import {ProjectObject} from "../model/project-object";

@Component({
  selector: 'project-cell',
  templateUrl: './project-cell.component.html',
  styleUrls: ['./project-cell.component.css']
})
export class ProjectCellComponent implements OnInit {

  @Input() project: ProjectObject;

  url: string;

  ngOnInit(): void {
    const projectCaptionContainer = document.getElementById(this.project.name + '-caption-container');
    const projectCaption = document.getElementById(this.project.name + '-caption');

    if (projectCaption && projectCaptionContainer) {
        projectCaption.className += ' hovered';
        projectCaptionContainer.className += ' hovered';

    }

  }

  /*
    #$name-caption-container.hovered {
    transition: background-color 300ms;
  }

  .project-cell:hover #$name-caption-container.hovered {
                          background-color: $hoverColor;
                        }

  #{{project.name}}-caption {
      margin-left: 0;
      transition: margin 300ms;
    }

  .project-cell:hover #$name-caption.hovered {
                          margin-left: 20%;
                        }
  */

}
