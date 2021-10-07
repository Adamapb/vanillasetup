/**
 * @copyright 2009-2020 Vanilla Forums Inc.
 * @license GPL-2.0-only
 */

import { IDiscussion } from "@dashboard/@types/api/discussion";
import { discussionListVariables } from "@library/features/discussions/DiscussionList.variables";
import DiscussionListItem from "@library/features/discussions/DiscussionListItem";
import { PageBox } from "@library/layout/PageBox";
import { List } from "@library/lists/List";
import { t } from "@vanilla/i18n";
import React from "react";

interface IProps {
    discussions: IDiscussion[];
}

export function DiscussionListView(props: IProps) {
    const { discussions } = props;
    const variables = discussionListVariables();
    return (
        <List
            options={{
                box: variables.contentBoxes.depth1,
                itemBox: variables.contentBoxes.depth2,
            }}
            {...props}
        >
            {discussions.length === 0 ? (
                <PageBox as="li">{t("No discussions were found.")}</PageBox>
            ) : (
                discussions.map((discussion) => {
                    return (
                        <DiscussionListItem discussion={discussion} key={discussion.discussionID}></DiscussionListItem>
                    );
                })
            )}
        </List>
    );
}
