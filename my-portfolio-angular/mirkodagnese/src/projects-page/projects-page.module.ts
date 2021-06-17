import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { ProjectsPageRoutingModule } from './projects-page-routing.module';
import { ProjectsPageComponent } from './projects-page.component';
import { ProjectCellComponent } from "../project-cell/project-cell.component";

@NgModule({
  declarations: [
    ProjectsPageComponent,
    ProjectCellComponent
  ],
    imports: [
        BrowserModule,
        ProjectsPageRoutingModule,
    ],
  providers: [],
  bootstrap: [ProjectsPageComponent]
})
export class ProjectsPageModule { }
