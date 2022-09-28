<?php

/* @Admin/CtTypeUsage/edit.html.twig */
class __TwigTemplate_7445052c4185103d748f9f2a2122951b86fd7af2ca41fdb5e6df743f649e7a2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeUsage/edit.html.twig", 1);
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
        $__internal_f6f86a1bbc0287be80328cfaacd71ef0d4b3685f289260e94b84ab65edb9be99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f86a1bbc0287be80328cfaacd71ef0d4b3685f289260e94b84ab65edb9be99->enter($__internal_f6f86a1bbc0287be80328cfaacd71ef0d4b3685f289260e94b84ab65edb9be99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeUsage/edit.html.twig"));

        $__internal_9bad9e1921670816b3746760ecc630e527d2e6595226cd0d921d7d47d0869b18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bad9e1921670816b3746760ecc630e527d2e6595226cd0d921d7d47d0869b18->enter($__internal_9bad9e1921670816b3746760ecc630e527d2e6595226cd0d921d7d47d0869b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeUsage/edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_type_usage"] = true;
        // line 8
        $context["menu_type_usage_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6f86a1bbc0287be80328cfaacd71ef0d4b3685f289260e94b84ab65edb9be99->leave($__internal_f6f86a1bbc0287be80328cfaacd71ef0d4b3685f289260e94b84ab65edb9be99_prof);

        
        $__internal_9bad9e1921670816b3746760ecc630e527d2e6595226cd0d921d7d47d0869b18->leave($__internal_9bad9e1921670816b3746760ecc630e527d2e6595226cd0d921d7d47d0869b18_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08335a53c8ea89b3a8d780f46b0616411cdd2d3c6035942d23c18676bc7ddbbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08335a53c8ea89b3a8d780f46b0616411cdd2d3c6035942d23c18676bc7ddbbb->enter($__internal_08335a53c8ea89b3a8d780f46b0616411cdd2d3c6035942d23c18676bc7ddbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd668dfb4b46879a160f03c477c913ecc182d42ff27c41ee28906cddd95e6c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd668dfb4b46879a160f03c477c913ecc182d42ff27c41ee28906cddd95e6c19->enter($__internal_fd668dfb4b46879a160f03c477c913ecc182d42ff27c41ee28906cddd95e6c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Type d'usage ";
        
        $__internal_fd668dfb4b46879a160f03c477c913ecc182d42ff27c41ee28906cddd95e6c19->leave($__internal_fd668dfb4b46879a160f03c477c913ecc182d42ff27c41ee28906cddd95e6c19_prof);

        
        $__internal_08335a53c8ea89b3a8d780f46b0616411cdd2d3c6035942d23c18676bc7ddbbb->leave($__internal_08335a53c8ea89b3a8d780f46b0616411cdd2d3c6035942d23c18676bc7ddbbb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef878ac36a64083dc1581741be51db7efde655e986bdcf6f75436f4c37b85bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef878ac36a64083dc1581741be51db7efde655e986bdcf6f75436f4c37b85bef->enter($__internal_ef878ac36a64083dc1581741be51db7efde655e986bdcf6f75436f4c37b85bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d135ecdd4f60a6b6f47b7f1547eccdf2a20aa64449dd4f92262a075cea347c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d135ecdd4f60a6b6f47b7f1547eccdf2a20aa64449dd4f92262a075cea347c8->enter($__internal_7d135ecdd4f60a6b6f47b7f1547eccdf2a20aa64449dd4f92262a075cea347c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <h3 class=\"box-title\">Editer un type d'usage</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "tpuLibelle", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_usage\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_usage_index");
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
        
        $__internal_7d135ecdd4f60a6b6f47b7f1547eccdf2a20aa64449dd4f92262a075cea347c8->leave($__internal_7d135ecdd4f60a6b6f47b7f1547eccdf2a20aa64449dd4f92262a075cea347c8_prof);

        
        $__internal_ef878ac36a64083dc1581741be51db7efde655e986bdcf6f75436f4c37b85bef->leave($__internal_ef878ac36a64083dc1581741be51db7efde655e986bdcf6f75436f4c37b85bef_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeUsage/edit.html.twig";
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

{% block title %}{{ parent() }} Modification Type d'usage {% endblock %}

{% set menu_type_usage        = true %}
{% set menu_type_usage_create = true %}

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
                        <h3 class=\"box-title\">Editer un type d'usage</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.tpuLibelle) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_type_usage\"/>
                        <a href=\"{{ path('type_usage_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "@Admin/CtTypeUsage/edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeUsage\\edit.html.twig");
    }
}
