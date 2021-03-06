/**
 * @author Adam Charron <adam.c@vanillaforums.com>
 * @copyright 2009-2021 Vanilla Forums Inc.
 * @license gpl-2.0-only
 */

import { css, CSSObject } from "@emotion/css";
import { panelLayoutVariables } from "@library/layout/PanelLayout.variables";
import { globalVariables } from "@library/styles/globalStyleVars";
import { Mixins } from "@library/styles/Mixins";
import { useThemeCache } from "@library/styles/themeCache";

export const widgetLayoutClasses = useThemeCache(() => {
    const globalVars = globalVariables();
    const layoutVars = panelLayoutVariables();

    const widgetMixin: CSSObject = {
        ...Mixins.margin({
            vertical: globalVars.spacer.pageComponent,
        }),
        ...layoutVars.mediaQueries().oneColumnDown({
            ...Mixins.margin({
                vertical: globalVars.spacer.pageComponentCompact,
            }),
        }),
    };
    const widget = css(widgetMixin);

    const widgetWithContainerMixin = css({
        ...Mixins.padding({
            vertical: globalVars.spacer.pageComponent,
        }),
        ...layoutVars.mediaQueries().oneColumnDown({
            ...Mixins.padding({
                vertical: globalVars.spacer.pageComponentCompact,
            }),
        }),
    });
    const widgetWithContainer = css(widgetWithContainerMixin);

    const headingBlock = css({
        marginBottom: globalVars.spacer.headingBox,
    });

    return {
        widgetMixin,
        widget,
        widgetWithContainerMixin,
        widgetWithContainer,
        headingBlock,
    };
});
