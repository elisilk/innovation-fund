graph TD

    subgraph Program Field Groups
        Program["Program (CPT)"]

        Program --> ProgramMetadata
        Program --> PressCoverage
        Program --> RelatedEducators
    end

    subgraph Post Field Groups
        Post["Post"]

        Post --> RelatedEducators
        Post --> RelatedPrograms
        Post --> RelatedEvents
    end
