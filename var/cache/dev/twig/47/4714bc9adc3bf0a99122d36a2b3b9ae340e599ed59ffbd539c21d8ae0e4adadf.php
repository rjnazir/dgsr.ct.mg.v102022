<?php

/* AdminBundle:CtCarosserie:edit.html.twig */
class __TwigTemplate_07578c45abe1285cda1d167d913fad672c2a38327eef71033c45f8fe4c8811d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarosserie:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6139622e1394bf83353ae2ce918198ac272970d6fc1ed932fc0115386d0957d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6139622e1394bf83353ae2ce918198ac272970d6fc1ed932fc0115386d0957d->enter($__internal_f6139622e1394bf83353ae2ce918198ac272970d6fc1ed932fc0115386d0957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:edit.html.twig"));

        $__internal_da7a50a34e6028658b77027c2fac25a220bd6cb08b4f3c7912a1d5924259a198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7a50a34e6028658b77027c2fac25a220bd6cb08b4f3c7912a1d5924259a198->enter($__internal_da7a50a34e6028658b77027c2fac25a220bd6cb08b4f3c7912a1d5924259a198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarosserie:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_carosserie"] = true;
        // line 8
        $context["menu_carosserie_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6139622e1394bf83353ae2ce918198ac272970d6fc1ed932fc0115386d0957d->leave($__internal_f6139622e1394bf83353ae2ce918198ac272970d6fc1ed932fc0115386d0957d_prof);

        
        $__internal_da7a50a34e6028658b77027c2fac25a220bd6cb08b4f3c7912a1d5924259a198->leave($__internal_da7a50a34e6028658b77027c2fac25a220bd6cb08b4f3c7912a1d5924259a198_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_645aa3207be757077c5d35a1da454ad1731534349569f375ecf786160f69107b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_645aa3207be757077c5d35a1da454ad1731534349569f375ecf786160f69107b->enter($__internal_645aa3207be757077c5d35a1da454ad1731534349569f375ecf786160f69107b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_461ee3d7abbc88466d10e262f2922754c5332d7d185b4cd98cbcf01285e70936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_461ee3d7abbc88466d10e262f2922754c5332d7d185b4cd98cbcf01285e70936->enter($__internal_461ee3d7abbc88466d10e262f2922754c5332d7d185b4cd98cbcf01285e70936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Carrosserie ";
        
        $__internal_461ee3d7abbc88466d10e262f2922754c5332d7d185b4cd98cbcf01285e70936->leave($__internal_461ee3d7abbc88466d10e262f2922754c5332d7d185b4cd98cbcf01285e70936_prof);

        
        $__internal_645aa3207be757077c5d35a1da454ad1731534349569f375ecf786160f69107b->leave($__internal_645aa3207be757077c5d35a1da454ad1731534349569f375ecf786160f69107b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_074da561057b1224f34ca9c7326945fa48949aeb2aec74d3e49d8fcb2fd778c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074da561057b1224f34ca9c7326945fa48949aeb2aec74d3e49d8fcb2fd778c6->enter($__internal_074da561057b1224f34ca9c7326945fa48949aeb2aec74d3e49d8fcb2fd778c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80b0cfe1c1f42f85feb71171997ba8267a3867b38e7e7b12b5f557ee5aa823e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b0cfe1c1f42f85feb71171997ba8267a3867b38e7e7b12b5f557ee5aa823e6->enter($__internal_80b0cfe1c1f42f85feb71171997ba8267a3867b38e7e7b12b5f557ee5aa823e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une carrosserie</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "crsLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_carosserie\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carosserie_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_80b0cfe1c1f42f85feb71171997ba8267a3867b38e7e7b12b5f557ee5aa823e6->leave($__internal_80b0cfe1c1f42f85feb71171997ba8267a3867b38e7e7b12b5f557ee5aa823e6_prof);

        
        $__internal_074da561057b1224f34ca9c7326945fa48949aeb2aec74d3e49d8fcb2fd778c6->leave($__internal_074da561057b1224f34ca9c7326945fa48949aeb2aec74d3e49d8fcb2fd778c6_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarosserie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Carrosserie {% endblock %}

{% set menu_carosserie        = true %}
{% set menu_carosserie_create = true %}

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

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer une carrosserie</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.crsLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_carosserie\"/>
                        <a href=\"{{ path('carosserie_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtCarosserie:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarosserie/edit.html.twig");
    }
}
