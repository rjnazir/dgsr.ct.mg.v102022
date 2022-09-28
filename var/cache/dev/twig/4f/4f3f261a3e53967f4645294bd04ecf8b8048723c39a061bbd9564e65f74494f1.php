<?php

/* @Admin/CtGenreTarif/index.html.twig */
class __TwigTemplate_068d7a0be9f36695e70910bb26203b0fb75fbc54da9d5062cdefa461b054a1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtGenreTarif/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dd8a065f306cc3254eb27a100bb07c7679153e0c67efac45ddbf9539e60b056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd8a065f306cc3254eb27a100bb07c7679153e0c67efac45ddbf9539e60b056->enter($__internal_9dd8a065f306cc3254eb27a100bb07c7679153e0c67efac45ddbf9539e60b056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/index.html.twig"));

        $__internal_ac1a85ba34f845aeb5408c2447bc2abeb4f0eb9f93b2d9567ae13446f03b6ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1a85ba34f845aeb5408c2447bc2abeb4f0eb9f93b2d9567ae13446f03b6ce2->enter($__internal_ac1a85ba34f845aeb5408c2447bc2abeb4f0eb9f93b2d9567ae13446f03b6ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtGenreTarif/index.html.twig"));

        // line 5
        $context["menu_genre"] = true;
        // line 6
        $context["menu_genre_tarif"] = true;
        // line 7
        $context["menu_genre_tarif_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd8a065f306cc3254eb27a100bb07c7679153e0c67efac45ddbf9539e60b056->leave($__internal_9dd8a065f306cc3254eb27a100bb07c7679153e0c67efac45ddbf9539e60b056_prof);

        
        $__internal_ac1a85ba34f845aeb5408c2447bc2abeb4f0eb9f93b2d9567ae13446f03b6ce2->leave($__internal_ac1a85ba34f845aeb5408c2447bc2abeb4f0eb9f93b2d9567ae13446f03b6ce2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ef680ffb4bbb5ce03c639d6e2e752a2491711dc3617c5df7e8648c807efb9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef680ffb4bbb5ce03c639d6e2e752a2491711dc3617c5df7e8648c807efb9ea->enter($__internal_2ef680ffb4bbb5ce03c639d6e2e752a2491711dc3617c5df7e8648c807efb9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9bd7f00a4d5ef091564d1bf8dc2162567aa6b09a254e8de34b821f067cb7eb12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd7f00a4d5ef091564d1bf8dc2162567aa6b09a254e8de34b821f067cb7eb12->enter($__internal_9bd7f00a4d5ef091564d1bf8dc2162567aa6b09a254e8de34b821f067cb7eb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des genres ";
        
        $__internal_9bd7f00a4d5ef091564d1bf8dc2162567aa6b09a254e8de34b821f067cb7eb12->leave($__internal_9bd7f00a4d5ef091564d1bf8dc2162567aa6b09a254e8de34b821f067cb7eb12_prof);

        
        $__internal_2ef680ffb4bbb5ce03c639d6e2e752a2491711dc3617c5df7e8648c807efb9ea->leave($__internal_2ef680ffb4bbb5ce03c639d6e2e752a2491711dc3617c5df7e8648c807efb9ea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_802a407bd11151e3b355b458fd7af10d6dd9c3f49e13d0b99aac33f1035128ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802a407bd11151e3b355b458fd7af10d6dd9c3f49e13d0b99aac33f1035128ed->enter($__internal_802a407bd11151e3b355b458fd7af10d6dd9c3f49e13d0b99aac33f1035128ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_deb33e8a7fcaf7aee9502275eabcd5dda5e7952df9f00eb461d585d599e1ed68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb33e8a7fcaf7aee9502275eabcd5dda5e7952df9f00eb461d585d599e1ed68->enter($__internal_deb33e8a7fcaf7aee9502275eabcd5dda5e7952df9f00eb461d585d599e1ed68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 23
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 38
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du genre
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-genre\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Code</th>
                                <th>Prix</th>
                                <th>Ann&eacute;e</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 62
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "grLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "grCode", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 69
            if ($this->getAttribute($context["genre"], "grtPrix", array(), "any", true, true)) {
                // line 70
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "grtPrix", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 72
            echo "                                    </td>
                                    <td>
                                        ";
            // line 74
            if ($this->getAttribute($context["genre"], "grtAnnee", array(), "any", true, true)) {
                // line 75
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "grtAnnee", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 77
            echo "                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_edit", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genre_tarif_delete", array("id" => $this->getAttribute($context["genre"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                            </tbody>
                        </table>

                        ";
        // line 94
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_deb33e8a7fcaf7aee9502275eabcd5dda5e7952df9f00eb461d585d599e1ed68->leave($__internal_deb33e8a7fcaf7aee9502275eabcd5dda5e7952df9f00eb461d585d599e1ed68_prof);

        
        $__internal_802a407bd11151e3b355b458fd7af10d6dd9c3f49e13d0b99aac33f1035128ed->leave($__internal_802a407bd11151e3b355b458fd7af10d6dd9c3f49e13d0b99aac33f1035128ed_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_182c135b7d0b8c85c7d356119d99c03ee6893b84ffd7b7fecb3671fbd9451c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182c135b7d0b8c85c7d356119d99c03ee6893b84ffd7b7fecb3671fbd9451c3d->enter($__internal_182c135b7d0b8c85c7d356119d99c03ee6893b84ffd7b7fecb3671fbd9451c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b68fac9e5fbd0d420c7645a74efdd9e0f0975be477fe8bc288347f38621889ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68fac9e5fbd0d420c7645a74efdd9e0f0975be477fe8bc288347f38621889ae->enter($__internal_b68fac9e5fbd0d420c7645a74efdd9e0f0975be477fe8bc288347f38621889ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-genre').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune genre trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_b68fac9e5fbd0d420c7645a74efdd9e0f0975be477fe8bc288347f38621889ae->leave($__internal_b68fac9e5fbd0d420c7645a74efdd9e0f0975be477fe8bc288347f38621889ae_prof);

        
        $__internal_182c135b7d0b8c85c7d356119d99c03ee6893b84ffd7b7fecb3671fbd9451c3d->leave($__internal_182c135b7d0b8c85c7d356119d99c03ee6893b84ffd7b7fecb3671fbd9451c3d_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtGenreTarif/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 108,  267 => 107,  246 => 94,  241 => 90,  229 => 84,  222 => 80,  217 => 77,  211 => 75,  209 => 74,  205 => 72,  199 => 70,  197 => 69,  192 => 67,  188 => 66,  183 => 64,  179 => 62,  175 => 61,  158 => 47,  147 => 39,  144 => 38,  132 => 27,  123 => 24,  118 => 23,  114 => 22,  111 => 21,  102 => 18,  99 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  68 => 10,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des genres {% endblock %}

{% set menu_genre      = true %}
{% set menu_genre_tarif      = true %}
{% set menu_genre_tarif_list = true %}


{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('genre_tarif_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du genre
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('genre_tarif_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-genre\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Code</th>
                                <th>Prix</th>
                                <th>Ann&eacute;e</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for genre in genres %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ genre.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ genre.grLibelle }}</td>
                                    <td>{{ genre.grCode }}</td>
                                    <td>
                                        {% if genre.grtPrix is defined %}
                                            {{ genre.grtPrix }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if genre.grtAnnee is defined %}
                                            {{ genre.grtAnnee }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('genre_tarif_edit', { 'id': genre.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('genre_tarif_delete', { 'id': genre.id }) }}\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-genre').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune genre trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtGenreTarif/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtGenreTarif\\index.html.twig");
    }
}
