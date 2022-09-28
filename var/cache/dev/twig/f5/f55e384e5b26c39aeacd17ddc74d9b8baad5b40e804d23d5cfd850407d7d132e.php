<?php

/* AdminBundle:CtUtilisation:index.html.twig */
class __TwigTemplate_4ee0867e6f7ad14b2a8299fc82a6a5e28bd27b1da9263518398a84f5537152b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtUtilisation:index.html.twig", 1);
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
        $__internal_bd27d98ef3c1d7020cb49cdee4f21b3c5cd2c15bbd786a968f243c6af3e875a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd27d98ef3c1d7020cb49cdee4f21b3c5cd2c15bbd786a968f243c6af3e875a2->enter($__internal_bd27d98ef3c1d7020cb49cdee4f21b3c5cd2c15bbd786a968f243c6af3e875a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:index.html.twig"));

        $__internal_0e12821d5d45ec47283da38ff0aef374afea804d3ae4a2193338f0102c7b7707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e12821d5d45ec47283da38ff0aef374afea804d3ae4a2193338f0102c7b7707->enter($__internal_0e12821d5d45ec47283da38ff0aef374afea804d3ae4a2193338f0102c7b7707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtUtilisation:index.html.twig"));

        // line 5
        $context["menu_utilisation"] = true;
        // line 6
        $context["menu_utilisation_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd27d98ef3c1d7020cb49cdee4f21b3c5cd2c15bbd786a968f243c6af3e875a2->leave($__internal_bd27d98ef3c1d7020cb49cdee4f21b3c5cd2c15bbd786a968f243c6af3e875a2_prof);

        
        $__internal_0e12821d5d45ec47283da38ff0aef374afea804d3ae4a2193338f0102c7b7707->leave($__internal_0e12821d5d45ec47283da38ff0aef374afea804d3ae4a2193338f0102c7b7707_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e85e97948414222d1e9ac268f94c5135ef9480f56e2530877829a446bd46e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e85e97948414222d1e9ac268f94c5135ef9480f56e2530877829a446bd46e16->enter($__internal_7e85e97948414222d1e9ac268f94c5135ef9480f56e2530877829a446bd46e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c04a6f87d2e1d8b064e02f3d02745bcf660e4b01e359ce7a6c541efa3411ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c04a6f87d2e1d8b064e02f3d02745bcf660e4b01e359ce7a6c541efa3411ca8->enter($__internal_7c04a6f87d2e1d8b064e02f3d02745bcf660e4b01e359ce7a6c541efa3411ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des utilisations ";
        
        $__internal_7c04a6f87d2e1d8b064e02f3d02745bcf660e4b01e359ce7a6c541efa3411ca8->leave($__internal_7c04a6f87d2e1d8b064e02f3d02745bcf660e4b01e359ce7a6c541efa3411ca8_prof);

        
        $__internal_7e85e97948414222d1e9ac268f94c5135ef9480f56e2530877829a446bd46e16->leave($__internal_7e85e97948414222d1e9ac268f94c5135ef9480f56e2530877829a446bd46e16_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ee4aa7e51d1e5ea0bbe0f528029a63b988530005e8a2d134e420d908c0a206a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee4aa7e51d1e5ea0bbe0f528029a63b988530005e8a2d134e420d908c0a206a->enter($__internal_3ee4aa7e51d1e5ea0bbe0f528029a63b988530005e8a2d134e420d908c0a206a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75565a25970239ca9770898b54c0e203bbe39e44ed67dbf938b31ce69c753506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75565a25970239ca9770898b54c0e203bbe39e44ed67dbf938b31ce69c753506->enter($__internal_75565a25970239ca9770898b54c0e203bbe39e44ed67dbf938b31ce69c753506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une utilisation
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-utilisation\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisations"] ?? $this->getContext($context, "utilisations")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisation"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisation"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisation"], "utLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_edit", array("id" => $this->getAttribute($context["utilisation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("utilisation_delete", array("id" => $this->getAttribute($context["utilisation"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>

                        ";
        // line 78
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
        
        $__internal_75565a25970239ca9770898b54c0e203bbe39e44ed67dbf938b31ce69c753506->leave($__internal_75565a25970239ca9770898b54c0e203bbe39e44ed67dbf938b31ce69c753506_prof);

        
        $__internal_3ee4aa7e51d1e5ea0bbe0f528029a63b988530005e8a2d134e420d908c0a206a->leave($__internal_3ee4aa7e51d1e5ea0bbe0f528029a63b988530005e8a2d134e420d908c0a206a_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35861b6878789d09e7129b8f9c32d092c073b97d69f670b5cc8c02b9867c522d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35861b6878789d09e7129b8f9c32d092c073b97d69f670b5cc8c02b9867c522d->enter($__internal_35861b6878789d09e7129b8f9c32d092c073b97d69f670b5cc8c02b9867c522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8839e5dbf7c7675f177e08c96915312701c6ce75062da0f3011d794d6a20dc51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8839e5dbf7c7675f177e08c96915312701c6ce75062da0f3011d794d6a20dc51->enter($__internal_8839e5dbf7c7675f177e08c96915312701c6ce75062da0f3011d794d6a20dc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-utilisation').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune utilisation trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_8839e5dbf7c7675f177e08c96915312701c6ce75062da0f3011d794d6a20dc51->leave($__internal_8839e5dbf7c7675f177e08c96915312701c6ce75062da0f3011d794d6a20dc51_prof);

        
        $__internal_35861b6878789d09e7129b8f9c32d092c073b97d69f670b5cc8c02b9867c522d->leave($__internal_35861b6878789d09e7129b8f9c32d092c073b97d69f670b5cc8c02b9867c522d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtUtilisation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  234 => 91,  213 => 78,  208 => 74,  196 => 68,  189 => 64,  183 => 61,  178 => 59,  174 => 57,  170 => 56,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des utilisations {% endblock %}

{% set menu_utilisation      = true %}
{% set menu_utilisation_list = true %}

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
                    <a href=\"{{ path('utilisation_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une utilisation
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('utilisation_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-utilisation\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for utilisation in utilisations %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ utilisation.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ utilisation.utLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('utilisation_edit', { 'id': utilisation.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('utilisation_delete', { 'id': utilisation.id }) }}\">
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
            \$('#list-utilisation').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucune utilisation trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtUtilisation:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtUtilisation/index.html.twig");
    }
}
