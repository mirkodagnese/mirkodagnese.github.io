import { ChangeDetectorRef, Component, Input } from '@angular/core';
import {ProjectObject} from "../../../model/project-object";
import {Router} from "@angular/router";

@Component({
  selector: 'project-cell',
  templateUrl: './project-cell.component.html',
  styleUrls: ['./project-cell.component.css']
})
export class ProjectCellComponent {

  @Input() project: ProjectObject;

  url: string;
  cssAdded: boolean = false;

  constructor(private changeDetector: ChangeDetectorRef, private router: Router) {}

  addDynamicCss(): void {
    const projectCaptionContainer = document.getElementById(this.project.name + '-caption-container');
    const projectCaption = document.getElementById(this.project.name + '-caption');

    if (projectCaption && projectCaptionContainer) {
      let css = "#" + this.project.name + "-caption-container.hovered { transition: background-color 300ms; }\n" +
        ".project-cell:hover #" + this.project.name + "-caption-container.hovered { background-color: " + this.project.hoverColor + "; }\n" +
        "#" + this.project.name + "-caption { margin-left: 0; transition: margin 300ms; }\n" +
        ".project-cell:hover #" + this.project.name + "-caption.hovered { margin-left: 20%; }";
      let style = document.createElement("style");

      if (style.style) {
        style.innerText = css;
      } else {
        style.appendChild(document.createTextNode(css));
      }
      document.getElementById(this.project.name + "-caption-container").appendChild(style);

      projectCaption.className += ' hovered';
      projectCaptionContainer.className += ' hovered';
      this.cssAdded = true;
    }
  }

  onHover(): void {
    if (!this.cssAdded) {
      this.addDynamicCss();
    }
  }

  navigateToDetail(name: string): void {
    const url = this.router.createUrlTree(['/project-detail'], { queryParams: { name: name } });
    window.open(url.toString(), '_blank');
  }

}
