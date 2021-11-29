# Mighty Mind PHP/SilverStripe/GraphQL Challenge

This code challenge will test your:

- Ability to think on the spot
- Communication skills and ability to talk through your code with others
- Logical thought processes
- This coding challenge designed to be completed in 60 minutes.
- Yuo can extend the work over the limit of 60 minute on the challenge if you wish to elaborate it further.

## Writing your code

Please look at the Schema Attached to this challenge. It will need to be served via a GraphQL endpoint. Authentication is required.

You are encouragd to use the GraphQL Add-On for SilverStripe:

[GraphQL Add-On](https://addons.silverstripe.org/add-ons/silverstripe/graphql)

[Material UI Official Website](https://material-ui.com/)

When Writing your code, please be mindful of the following:

-use eslint for js lint
-use stylelint for scss lint
-use editorconfig for editor configuration
-use packages.json to expose your scripts

The code must be submitted to public repo in gitlab and a live version has to be deployed on gitlab pages

Please add the public link to the README.md file on your codebase. The layout must be responsive and optimise for iPad and iPhone.

You are encouraged to use Material UI Components and implement custom styles using emotion

[emotion for react ](https://emotion.sh/docs/introduction)

[emotion and Material UI](https://networksynapse.net/development/mui-v5-material-with-emotion/)

## Installation

Create a new react application named material-ui run the code below.

```bash
npx create-react-app MightyMinds

yarn add @material-ui/core fontsource-roboto @material-ui/icons

yarn add @material-ui/core

yarn add @material-ui/icons

yarn add @emotion/react

yarn add @emotion/styled

yarn add --dev @emotion/babel-plugin

```

## Usage

In Index.js

```JavaScript
// After you installed all the required modules you can start using react with material-ui and style our components.
/** @jsxImportSource @emotion/react */
import React from "react";
import ReactDOM from "react-dom";
import { css } from "@emotion/react"
import Button from "@material-ui/core/Button";

const App = () => {
  return (
    <Button
    css={css`
             margin-left: 10px;
        `}
        variant="contained" color="primary">
      Mighty Minds
    </Button>
  );
}
```

# The Layout

![Portal Home](https://gitlab.com/rutigliano/reactchallenge/-/raw/main/PORTAL%20HOME.png)
